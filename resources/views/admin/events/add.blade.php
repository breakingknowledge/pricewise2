@extends('admin.layouts.app')
@section('title','POPTelecom- Event Create')
@section('content')
<style>
    .images-preview-div img {
        padding: 10px;
        max-width: 100px;
    }
</style>
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.events.index')}}">Event</a></li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<form id="productForm" method="post" action="{{route('admin.events.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="mb-0">Add New Event</h5>
                </div>
                <div class="card-body p-4">
                    <div class=" mb-3">
                        <label for="input35" class=" col-form-label">Event Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Event Name">
                    </div>

                    <div class=" mb-3">
                        <label for="input35" class=" col-form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Description.." rows="3"></textarea>
                    </div>
                    <div class=" mb-3">
                        <label for="input35" class=" col-form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="input35" class=" col-form-label">Start Date</label>
                            <div class="date-box date" id="datepicker">
                                <input type="text" class="form-control" id="start_date" name="start_date" placeholder="select" />
                                <span class="input-group-append">
                                    <span class="date-icon d-block">
                                        <i class="fal fa-calendar-alt"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-3">
                            <label for="input35" class=" col-form-label">End Date</label>
                            <input type="text" class="form-control" id="end_date" name="end_date" placeholder="End Date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="input35" class=" col-form-label">Start Time</label>
                            <input type="text" class="form-control" id="start_time" name="start_time" placeholder="Start Time">
                        </div>

                        <div class="col-md-6 col-12 mb-3">
                            <label for="input35" class=" col-form-label">End Time</label>
                            <input type="text" class="form-control" id="end_time" name="end_time" placeholder="End Time">
                        </div>
                    </div>

                    <div class=" mb-3">
                        <label for="input35" class=" col-form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>

                    <div class="mb-3">
                        <label for="input40" class="col-sm-3 col-form-label">Image</label>
                        <!-- <input type="file" class="form-control" name="image[]" id="image" accept="images/*" multiple/> -->
                        <!-- <input type="file" name="image[]" id="files" class="form-control" placeholder="Choose Images" multiple> -->

                    </div>
                    <!-- <div class="input-group control-group increment">
                        <input type="file" name="image[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                    </div>
                    <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="file" name="image[]" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="mt-1 text-center">
                            <div class="images-preview-div"> </div>
                        </div>
                    </div> -->

                    <div class="row mb-3">
                        <div class="">
                            <label class=" col-form-label"></label>

                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
                                <button type="reset" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="mb-3 form-group">
                        <label for="input40" class="col-form-label"><b>Publish Status</b>
                        </label>
                        <select id="status" name="status" class="select2 form-select">

                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>


                </div>
            </div>
        </div>
    </div>

    </div>

</form>
@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description', {
        allowedContent: true
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>
<script>
    $(".clone").hide();
    $("#image").click(function() {
        $image = $(this).val();
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
            name: "required",
            email: "required",
            phone: "required",
            address: "required",
            passport: "required",
            driving_license: "required",

        },
        messages: {
            name: "Name is missing",
            email: "Email is missing",
            phone: "Phone No. is missing",
            address: "Address is missing",
            passport: "Passport is missing",
            driving_license: "Driving License is missing"
        },
        submitHandler: function(form) {
            // var value = CKEDITOR.instances['description'].getData()
            // $("#description").val(value);

            var formData = new FormData(this);
            $.ajax({

                url: form.action,
                method: "post",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    //success
                    // alert(data);
                    $("#productForm").trigger("reset");
                    if (data.status) {
                        location.href = data.redirect_location;
                    } else {
                        toastr.error(data.message.message, '');
                    }
                },
                error: function(e) {
                    toastr.error('Something went wrong . Please try again later!!', '');
                }
            });
            return false;
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
@endpush