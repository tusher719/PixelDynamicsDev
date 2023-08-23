@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> --}}

    <style>
        .ck.ck-editor__main>.ck-editor__editable {
            background: #0c1427;
        }
        .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable,
        .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {
            height: 120px;
        }
    </style>

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Team</li>
                <li class="breadcrumb-item"><a href="{{ route('all.carousel.manage') }}">Carousel Manage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Carousel</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Add Carousel</h6>

                        <form action="{{ route('store.carousel') }}" method="POST" enctype="multipart/form-data" class="forms-sample" id="myForm">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Portfolio name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Portfolio name">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Industry</label>
                                        <input type="text" name="industry" class="form-control" value="Industry Experience">
                                        @error('industry')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Area</label>
                                        <input type="text" name="area" class="form-control" value="Area of Expertise">
                                        @error('area')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Industry Experience</label>
                                        <input type="text" name="industry_experience" class="form-control" placeholder="Enter Industry Experience">
                                        @error('industry_experience')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Area Experience</label>
                                        <input type="text" name="area_experience" class="form-control" placeholder="Enter Area Experience">
                                        @error('area_experience')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">File upload (Max file size: 500kb)</label>
                                        <input name="member_img" class="form-control" type="file" id="photo">
                                        @error('member_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12">
                                    <label class="form-label">Image Preview</label>
                                    <div class="mb-3">
                                        <img id="showImage" class="wd-300" src="{{ (!empty($profileData->photo)) ? url('uploads/admin_images/'.$profileData->photo) : url('uploads/no_image.jpg') }}" alt="profile">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <label class="form-label">Description</label>
                                    <div class="mb-3">
                                        <div>
                                            <textarea id="desc" name="description" rows="20" cols="15">
                                                Description
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <label class="form-label">Description 2</label>
                                    <div class="mb-3">
                                        <div>
                                            <textarea id="desc2" name="description2" rows="20" cols="15">
                                                Description
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#desc' ) )
        .catch( error => {
            console.error( error );
        } );


        ClassicEditor
        .create( document.querySelector( '#desc2' ) )
        .catch( error => {
            console.error( error );
        } );
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
