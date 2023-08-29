@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> --}}


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item"><a href="{{ route('all.blog') }}">Blog Manage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Edit Blog</h6>

                        <form action="/update/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data" class="forms-sample" id="myForm">
                            @csrf

                            <input type="hidden" name="id" value="{{ $blog->id }}">

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Blog Name</label>
                                        <input type="text" name="blog_name" class="form-control" value="{{ $blog->blog_name }}" placeholder="Enter Blog name">
                                        @error('blog_name')
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
                                                <option value="{{ $item->id }}" {{ $item->id == $blog->category_id ? 'selected': '' }}>{{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">File upload (Max file size: 5MB)</label>
                                        <input name="blog_img" class="form-control" type="file" id="photo">
                                        @error('blog_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="form-label" for="formFile">Old Image</label>
                                    <div class="mb-3">
                                        <img class="wd-300" src="{{ (!empty($blog->blog_img)) ? url('uploads/blog/'.$blog->blog_img) : url('uploads/no_image.jpg') }}" alt="profile">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <img id="showImage" class="wd-300" src="{{ url('uploads/no_image.jpg') }}" alt="profile">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <label class="form-label" for="formFile">Post Details</label>
                                    <div class="mb-3">
                                            <textarea id="editor1" name="blog_details" rows="20" cols="15">
                                                {{ $blog->blog_details }}
                                            </textarea>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary me-2">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>



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
