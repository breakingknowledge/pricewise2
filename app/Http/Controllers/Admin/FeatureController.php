<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\TvFeature;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\TvProduct;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objFeatures = TvFeature::latest()->get();
        return view('admin.tvfeatures.index', compact('objFeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.tvfeatures.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objFeature = new TvFeature();
        $objFeature->features = $request->name;
        $objFeature->input_type = $request->input_type;
        $objFeature->category = $request->category;
        if ($objFeature->save()) {
            Toastr::success('Feature Added Successfully', '', ["positionClass" => "toast-top-right"]);
            return response()->json(["status" => true, "redirect_location" => route("admin.features.index")]);
        } else {
            $message = array('message' => 'Something went wrong !! Please Try again later', 'title' => '');
            return response()->json(["status" => false, 'message' => $message]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objFeature = TvFeature::find($id);
        $categories = Category::latest()->get();
        return view('admin.tvfeatures.edit', compact('objFeature', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objFeature = TvFeature::find($id);
        $objFeature->features = $request->name;
        $objFeature->input_type = $request->input_type;
        $objFeature->category = $request->category;
        if ($objFeature->save()) {
            Toastr::success('Feature Updated Successfully', '', ["positionClass" => "toast-top-right"]);
            return response()->json(["status" => true, "redirect_location" => route("admin.features.index")]);
        } else {
            $message = array('message' => 'Something went wrong !! Please Try again later', 'title' => '');
            return response()->json(["status" => false, 'message' => $message]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id = $request->id;
        $getFeature = TvFeature::find($id);
        try {
            $check = TvProduct::where('feature_id', $getFeature->id)->first();
            if ($check) {
                return back()->with(Toastr::error(__('Sorry we could not delete this Feature .This Feature is assigned to some topdeal service')));
            } else {
                TvFeature::find($id)->delete();
                return back()->with(Toastr::error(__('Feature deleted successfully!')));
            }
        } catch (Exception $e) {
            $error_msg = Toastr::error(__('There is an error! Please try later!'));
            return redirect()->route('admin.tv-features.index')->with($error_msg);
        }
    }
}
