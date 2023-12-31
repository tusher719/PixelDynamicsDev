@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> --}}


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Poftfolio</li>
                <li class="breadcrumb-item"><a href="{{ route('all.portfolio') }}">Poftfolio Manage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Poftfolio</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col-lg-12 col-md-12">
                <form action="{{ route('store.portfolio') }}" method="POST" enctype="multipart/form-data" class="forms-sample" id="myForm">
                    @csrf
                    <div class="card">
                        <div class="card-header d-flex" style="justify-content: space-between; align-items: center">
                            <h5>Add Portfolio</h5>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <label style="margin-right: 10px">ID:</label>
                                <input type="text" name="serial_id" class="form-control" placeholder="ID">
                            </div>
                        </div>
                        <div class="card-body">

                            <h6 class="card-title">Category</h6>

                            

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Portfolio Name</label>
                                            <input type="text" name="portfolio_name" class="form-control" placeholder="Enter Portfolio name">
                                            @error('portfolio_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Category Name</label>
                                            <select name="category_id" class="form-select">
                                                <option selected="" disabled="">Select Group</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">SubCategory Name</label>
                                            <select name="subcategory_id" class="form-select">

                                            </select>
                                            @error('subcategory_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formFile">File upload (Max file size: 2MB)</label>
                                            <input name="portfolio_img" class="form-control" type="file" id="photo">
                                            @error('portfolio_img')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <img id="showImage" class="wd-300" src="{{ (!empty($profileData->photo)) ? url('uploads/admin_images/'.$profileData->photo) : url('uploads/no_image.jpg') }}" alt="profile">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <label class="form-label" for="formFile">Post Details</label>
                                        <div class="mb-3">
                                                <textarea id="editor1" name="portfolio_details" rows="20" cols="15">
                                                    Portfolio Details
                                                </textarea>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary me-2">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script type="text/javascript">
    $(document).ready(function(){
        $('select[name="category_id"]').on('change',function(){
            var category_id = $(this).val();
            if (category_id) {

                $.ajax({
                    url: "{{ url('/get/subcategory') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){

                            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                        });
                    },
                });

            }else{
                alert('danger');
            }

        });
    });
    </script>


    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    category_name: {
                        required : true,
                    },

                },
                messages :{
                    category_name: {
                        required : 'Please Enter Category Name',
                    },


                },
                errorElement : 'span',
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#photo').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>




@endsection
