@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" ><a href="{{ route('contact.manage') }}">Messages</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Messages</li>
            </ol>
            <a href="{{ route('contact.manage') }}" type="button" class="btn btn-inverse-info">
                <i class="btn-icon-prepend" data-feather="chevron-left"></i>
                Back
            </a>
        </nav>

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Messages</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{ $messageview->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" value="{{ $messageview->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Service</label>
                                    <input type="text" class="form-control" value="{{ $messageview->service }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="15" disabled>{{ $messageview->message }} </textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
