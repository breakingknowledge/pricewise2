@extends('admin.layouts.app')
@section('title','PriceWise- Tv Internet Products Edit')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.internet-tv.index')}}">Tv Products</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-success" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                        </div>
                        <div class="tab-title">About this package</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#internet-feature" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                    <div class="tab-icon"><i class='bx bx-badge-check font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Internet Feature</div>
                    </div>
                </a>
            </li>
         
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tv-feature" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-badge-check font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Tv Feature</div>
                    </div>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#meta" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-badge-check font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Meta Tag</div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane fade show active" id="home" role="tabpanel">
                
                    <div class="row">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">Edit Internet & Tv Details</h5>
                        </div>
                        <div class="col-md-12 col-lg-12 col-12">


                            <div class="card-body p-4">
                                <form id="productForm2" method="post" action="{{route('admin.internet-tv.update', $objTv->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <div class="card">
                                                
                                                <div class="card-body p-4">
                                                    <div class=" mb-3">
                                                        <label for="input35" class=" col-form-label">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" placeholder="Product Title" value="{{$objTv->title}}">
                                                    </div>
                                
                                                    <div class=" mb-3">
                                                        <label for="input37" class="col-form-label">URL</label>
                                
                                                        <!-- <div class="input-group mb-3"> <span class="input-group-text">/product/</span> -->
                                                        <input type="text" class="form-control" id="link" name="link" value="{{$objTv->slug}}" readonly>
                                                        <!-- </div> -->
                                
                                                    </div>
                                
                                                    <div class=" mb-3">
                                                        <label for="input35" class=" col-form-label">Description</label>
                                                        <textarea class="form-control" name="description3" id="description3" placeholder="Product Description">{{$objTv->content}}</textarea>
                                                    </div>
                                
                                                    <div class="col-md-6 col-12">
                                                        <div class=" mb-3">
                                                            <label for="input37" class="col-form-label">Price</label>
                                                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{$objTv->price}}">
                                                    </div>
                                                    </div>
                                
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class=" mb-3">
                                                                <label for="pin_codes" class="col-form-label">Area PIN Codes</label>
                                                                <input type="text" class="form-control" id="pin_codes" name="pin_codes" placeholder="PIN codes with coma separated" value="{{implode(',',json_decode($objTv->pin_codes))}}">
                                                        </div>
                                                        </div>
                                    
                                                        <div class="col-md-6 col-12">
                                                            <div class=" mb-3">
                                                                <label for="valid_till" class="col-form-label">Offer Valid Till</label>
                                                                <input type="date" class="form-control" id="valid_till" name="valid_till" placeholder="Valid Till" value="{{$objTv->valid_till}}">
                                                        </div>
                                                        </div>
                                    
                                                    
                                                        <div class="col-md-6 col-12">
                                                            <div class=" mb-3">
                                                        <label for="avg_delivery_time" class=" col-form-label">Average delivery time</label>
                                                        <input type="number" class="form-control" id="avg_delivery_time" name="avg_delivery_time" placeholder="Average Delivery Time" value="{{$objTv->avg_delivery_time}}">
                                                            </div>
                                                        </div>
                                                    <div class="col-md-6 col-12">
                                                    <div class=" mb-3">
                                                        <label for="input35" class=" col-form-label">Transfer Service</label>
                                    
                                                        <div class="mb-3 add-scroll">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="transfer_service" value="1" @if($objTv->transfer_service == 1)checked @endif>
                                                                <label class="form-check-label" for="transfer_service">Available</label>
                                                            </div>
                                                        </div>
                                    
                                                    </div>
                                                    </div>
                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-12">
                                                        <div class=" mb-3">
                                                            <label for="input40" class=" col-form-label">Contract Length
                                                            </label>
                                                            <input type="number" class="form-control" id="contract_length" name="contract_length" value="{{$objTv->contract_length}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                    <div class="mb-3">
                                                        <label for="input40" class="col-form-label">Contract Type</label>
                                    
                                                        <select id="contract_length_id" name="contract_type" class="select2 form-select">
                                                            <option value="month" @if($objTv->contract_type == "month")selected @endif>Monthly</option>
                                                            <option value="year" @if($objTv->contract_type == "year")selected @endif>Yearly</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class=" mb-3">
                                                                <label for="input40" class=" col-form-label">Commission
                                                                </label>
                                                                <input type="number" class="form-control" id="commission" name="commission" value="{{$objTv->commission}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class=" mb-3">
                                                                <label for="input40" class=" col-form-label">Commission Type
                                                                </label>
                                                                <select id="commission_type" name="commission_type" class="select2 form-select">
                                                                    <option value="flat" @if($objTv->commission_type == "flat")selected @endif>Flat</option>
                                                                    <option value="prct" @if($objTv->commission_type == "prct")selected @endif>Percentage</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <!-- <label for="input35" class="col-form-label"><b>Top 3 Product</b></label> -->
                                                            <div class="mb-3 add-scroll">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="is_featured" value="1"  @if($objTv->is_featured == 1)checked @endif>
                                                                    <label class="form-check-label" for="flexCheckDefault">Feature Product</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        
                                                        <label for="input35" class=" col-form-label">Installation options</label>
                                                        <div class="mb-3 add-scroll">
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="manual_install" value="1"  @if($objTv->manual_install == 1)checked @endif>
                                                        <label class="form-check-label" for="manual_install">Manual Installation</label>
                                                        </div>
                                                        </div>
                                                        <div class="mb-3 add-scroll">
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="mechanic_install" value="1"  @if($objTv->mechanic_install == 1)checked @endif>
                                                        <label class="form-check-label" for="mechanic_charge">Mechanic Installation</label>
                                                        </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class=" mb-3">
                                                            <label for="mechanic_charge" class=" col-form-label">Mechanic Charge
                                                            </label>
                                                            <input type="number" class="form-control" id="mechanic_charge" name="mechanic_charge" value="{{$objTv->mechanic_charge}}">
                                                        </div>
                                                    </div>
                                                    </div>
                                
                                                
                                
                                                
                                
                                
                                                <div class="">
                                                    <label class=" col-form-label"></label>
                                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                                        <button type="submit" class="btn btn-primary px-4" name="submit23">Submit</button>
                                                        <button type="reset" class="btn btn-light px-4">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    
                                    <div class="col-md-3 col-12 col-lg-3">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="mb-3 form-group">
                                                    <label for="input40" class="col-form-label"><b>Publish Status</b>
                                                    </label>
                                                    <select id="online_status" name="online_status" class="select2 form-select">
                                                        <option value="1"  @if($objTv->status == "1")selected @endif>Publish</option>
                                                        <option value="0" @if($objTv->status == "0")selected @endif>Draft</option>
                                                       
                                                    </select>
                                                </div>
                                                <div class="mb-3 form-group">
                                                    <label for="input40" class="col-form-label"><b>Product Type</b>
                                                    </label>
                                                    <select id="product_type" name="product_type" class="select2 form-select">
                                                        <option value="personal" @if($objTv->product_type == "personal")selected @endif>Personal</option>
                                                        <option value="business" @if($objTv->product_type == "business")selected @endif>Business</option>
                                                        <option value="large-business" @if($objTv->product_type == "large-business")selected @endif>Large Business</option>
                                                        
                                                    </select>
                                                </div>
                                
                                                <div class="mb-3">
                                                    <label for="input40" class="col-form-label"><b>Category</b>
                                                    </label>
                                
                                                    <select id="category" name="category" class="select2 form-select">
                                                        @if($objCategory)
                                                        @foreach($objCategory as $val)
                                                        <option value="{{$val->id}}" @if($objTv->category == $val->id)selected @endif>{{$val->name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                
                                                <label for="input40" class="col-sm-6 col-form-label"><b>Product Image </b></label>
                                                <div class="mb-3">
                                                    <input type="file" class="form-control" name="image" id="image" accept="image/*" value="{{$objTv->image}}">
                                                </div>
                                                
                                
                                
                                                <label for="input35" class="col-form-label"><b>Combo Products</b></label>
                                                <div class="mb-3 add-scroll">
                                                    @if($objRelatedProducts)
                                                    @foreach($objRelatedProducts as $val)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="related_products[]" value="{{$val->id}}" @if(in_array($val->id, json_decode($objTv->combos)))checked @endif>
                                                        <label class="form-check-label" for="flexCheckDefault">{{$val->title}}</label>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                
                                </form>
                                
                            </div>
                        </div>
                        
                    </div>
                
            </div>
            <div class="tab-pane fade" id="tv" role="tabpanel">
                
                    <div class="row">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">Tv</h5>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card-body p-4">

                                
                            </div>

                        </div>
                        
                    </div>

                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" id="submitBtn" class="btn btn-primary px-4">Submit</button>
                                <button type="reset" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </div>
                
            </div>

         
            <div class="tab-pane fade" id="internet-feateure" role="tabpanel">
                
                    <div class="row">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">Internet Feature</h5>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card-body p-4">
                                

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" id="submitBtn" class="btn btn-primary px-4">Submit</button>
                                <button type="reset" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </div>
               

            </div>

            <div class="tab-pane fade" id="meta" role="tabpanel">
                <form id="offerForm" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">Edit Meta Section</h5>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="card-body p-4">


                                <div class="mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="">
                                </div>

                                <div class="mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Meta Keyword</label>
                                    <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" placeholder="Meta Keyword" value="">
                                </div>

                                <div class="mb-3">
                                    <label for="input40" class="col-sm-34 col-form-label">Meta Description </label>
                                    <textarea type="text" class="form-control" id="meta_desc" name="meta_desc" placeholder="Description ..." rows="3"></textarea>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" id="submitBtn" class="btn btn-primary px-4">Submit</button>
                                <button type="reset" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('description', {
        allowedContent: true,
        extraPlugins: 'colorbutton'
    });
</script>
<script>
    $(document).ready(function() {
        $('#affiliate_name').on('change', function() {
            $("temp_old").hide();
            $("#temp").show();
        });
    });
</script>
<script type="text/javascript">
    $("#productForm").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass("has-error");
            $(element).closest('.form-group').addClass("has-success");
        },

        rules: {
            title: "required",
            description: "required",

        },
        messages: {
            title: "Title is missing",
            description: "Description is missing",
        },
        submitHandler: function(form) {
            var data = CKEDITOR.instances.description.getData();
            $("#description").val(data);
            var formData = new FormData(form);
            alert(form.action)
            $.ajax({

                url: form.action,
                method: "PUT",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    //success

                    if (data.status) {
                        location.href = data.redirect_location;
                    } else {
                        toastr.error(data.message.message, 'Already Exists!');
                    }
                },
                error: function(e) {
                    toastr.error('Something went wrong . Please try again later!!', '');
                }
            });
            return false;
        }
    });

    $("#title").keyup(function() {
        var title_val = $("#title").val();
        $("#link").val(title_val.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, ''));
    });
    $("#title").keydown(function() {
        var title_val = $("#title").val();
        $("#link").val(title_val.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, ''));
    });
</script>
@endpush