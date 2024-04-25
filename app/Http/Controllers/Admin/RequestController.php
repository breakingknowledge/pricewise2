<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TvInternetProduct;
use App\Models\EnergyProduct;
use App\Models\InsuranceProduct;

use App\Models\Provider;
use App\Models\Feature;
use Validator;
use App\Http\Resources\EnergyResource;
use DB;
use App\Models\User;
use App\Models\UserData;
use App\Models\UserRequest;

class RequestController extends Controller
{
	public function index(Request $request)
	{
	    $requests = UserRequest::all();
	    return view('admin.requests.index', compact('requests'));
	}

	public function getRequests(Request $request)
{
    $draw = $request->get('draw');
    $row = $request->get("start");
    $rowperpage = $request->get("length"); // Rows display per page
    $columnIndex = $request['order'][0]['column']; // Column index
    $columnName = $request['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $request['order'][0]['dir']; // asc or desc
    $searchValue = $request['search']['value']; // Search value

    $totalRecords = UserRequest::select('count(*) as allcount')->count();
    $totalRecordswithFilter = UserRequest::select('count(*) as allcount');

    if ($searchValue) {
        $totalRecordswithFilter->where('id', 'like', '%' . $searchValue . '%')
            ->orWhere('user_id', 'like', '%' . $searchValue . '%')
            ->orWhere('user_type', 'like', '%' . $searchValue . '%')
            ->orWhere('category', 'like', '%' . $searchValue . '%')
            ->orWhere('sub_category', 'like', '%' . $searchValue . '%')
            ->orWhere('service_id', 'like', '%' . $searchValue . '%')
            ->orWhere('service_type', 'like', '%' . $searchValue . '%')
            ->orWhere('combos', 'like', '%' . $searchValue . '%')
            ->orWhere('total_price', 'like', '%' . $searchValue . '%')
            ->orWhere('discounted_price', 'like', '%' . $searchValue . '%')
            ->orWhere('discount_prct', 'like', '%' . $searchValue . '%')
            ->orWhere('commission_prct', 'like', '%' . $searchValue . '%')
            ->orWhere('commission_amt', 'like', '%' . $searchValue . '%')
            ->orWhere('shipping_address', 'like', '%' . $searchValue . '%')
            ->orWhere('billing_address', 'like', '%' . $searchValue . '%')
            ->orWhere('request_status', 'like', '%' . $searchValue . '%');
    }

    if (isset($request->user_id)) {
        $totalRecordswithFilter = $totalRecordswithFilter->where('user_id', 'like', '%' . $request->user_id . '%');
    }

    if (isset($request->user_type)) {
        $totalRecordswithFilter = $totalRecordswithFilter->where('user_type', 'like', '%' . $request->user_type . '%');
    }

    if (isset($request->request_status)) {
        $totalRecordswithFilter = $totalRecordswithFilter->where('request_status', 'like', '%' . $request->request_status . '%');
    }

    $totalRecordswithFilter = $totalRecordswithFilter->count();

    $requestRecords = UserRequest::with('service')->select('user_requests.*', 'users.name as user_name')
    ->leftJoin('users', 'user_requests.user_id', '=', 'users.id')
    ->orderBy($columnName, $columnSortOrder);

	if (isset($request->user_id)) {
	    $requestRecords = $requestRecords->where('user_requests.user_id', 'like', '%' . $request->user_id . '%');
	}

	if (isset($request->user_type)) {
	    $requestRecords = $requestRecords->where('user_requests.user_type', 'like', '%' . $request->user_type . '%');
	}

	if (isset($request->request_status)) {
	    $requestRecords = $requestRecords->where('user_requests.request_status', 'like', '%' . $request->request_status . '%');
	}

	$requestRecords = $requestRecords->skip($row)
	    ->take($rowperpage)
	    ->get();

	$data = [];

	foreach ($requestRecords as $key => $record) {
	    $editUrl = route('admin.requests.edit',$record->id). '?' . http_build_query(['category' => $record->category, 'service_id' => $record->service_id]);
	    $action = '<a href="' . $editUrl . '" class="btn btn-primary btn-sm">Edit</a>';

	    $data[] = [
	        'id' => $record->id,
	        'product' => $record->service->title,
	        'user_name' => $record->user_name, // Displaying user's name instead of ID
	        'user_type' => $record->user_type,
	        'category' => $record->category,
	        'sub_category' => $record->sub_category,
	        'service_id' => $record->service_id,
	        'service_type' => $record->service_type,
	        'combos' => $record->combos,
	        'total_price' => $record->total_price,
	        'discounted_price' => $record->discounted_price,
	        'discount_prct' => $record->discount_prct,
	        'commission_prct' => $record->commission_prct,
	        'commission_amt' => $record->commission_amt,
	        'shipping_address' => $record->shipping_address,
	        'billing_address' => $record->billing_address,
	        'request_status' => $record->request_status,
	        'created_at' => $record->created_at,
	        'updated_at' => $record->updated_at,
	        'action' => $action,
	    ];
	}

	$response = [
	    "draw" => intval($draw),
	    "iTotalRecords" => $totalRecords,
	    "iTotalDisplayRecords" => $totalRecordswithFilter,
	    "data" => $data,
	];

	return response()->json($response);

}

	public function edit(Request $request, $id)
	{
		$serviceId = $request->query('service_id');
		$category = $request->query('category');
	    $userRequest = UserRequest::with('service','advantagesData','userDetails','providerDetails','categoryDetails')->where('id', $id)		    
		    ->first();
		    //dd(json_decode($userRequest->advantages, true));		    
	    return view('admin.requests.edit', compact('userRequest'));
	}


	public function updateStatus(Request $request, $id)
	{
	    $userRequest = UserRequest::findOrFail($id);
	    $userRequest->update(['request_status' => $request->input('request_status')]);
	    return redirect()->back()->with('success', 'Request status updated successfully.');
	}
}