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
                <li class="breadcrumb-item">Members</li>
                <li class="breadcrumb-item"><a href="{{ route('all.member.manage') }}">Members Manage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Team Members</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h3 class="mb-3">Edit Team Member</h3>

                        <form action="/update/member/{{ $members->id }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <input type="hidden" name="id" value="{{ $members->id }}">

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Portfolio Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $members->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="position" class="form-control" value="{{ $members->position }}">
                                        @error('position')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Position / Role</label>
                                        <input type="text" name="role" class="form-control" value="{{ $members->role }}">
                                        @error('role')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job</label>
                                        <input type="text" name="job" class="form-control" value="{{ $members->job }}">
                                        @error('job')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job2</label>
                                        <input type="text" name="job2" class="form-control" value="{{ $members->job2 }}">
                                        @error('job')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job3</label>
                                        <input type="text" name="job3" class="form-control" value="{{ $members->job3 }}">
                                        @error('job')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job4</label>
                                        <input type="text" name="job4" class="form-control" value="{{ $members->job4 }}">
                                        @error('job')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job5</label>
                                        <input type="text" name="job5" class="form-control" value="{{ $members->job5 }}">
                                        @error('job')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Job6</label>
                                        <input type="text" name="job6" class="form-control" value="{{ $members->job6 }}">
                                        @error('job')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">File upload</label>
                                        <input name="member_img" class="form-control" type="file" id="photo">
                                        @error('member_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label class="form-label">Old Image</label>
                                        <div class="mb-3">
                                            <img class="wd-150" src="{{ (!empty($members->member_img)) ? url('uploads/members/Team/'.$members->member_img) : url('uploads/no_image.jpg') }}" alt="profile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label class="form-label">Image Preview</label>
                                    <div class="mb-3">
                                        <img id="showImage" class="wd-300" src="{{ (!empty($members->photo)) ? url('uploads/members/Team/'.$members->photo) : url('uploads/no_image.jpg') }}" alt="profile">
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
