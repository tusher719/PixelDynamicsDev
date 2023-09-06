@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Settings</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                @include('backend.setting.logo')
                            </div>
                            <div class="col-md-12 mt-5">
                                @include('backend.setting.nav_social')
                            </div>
                        </div>
                        

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
