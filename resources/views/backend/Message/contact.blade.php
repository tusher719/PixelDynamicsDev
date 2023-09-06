@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Messages</h3>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>service</th>
                                        <th>message</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><h5>{{ $item->name }}</h5></td>
                                        <td><h5>{{ $item->email }}</h5></td>
                                        <td><h5>{{ $item->service }}</h5></td>
                                        <td><h5>{{ Str::limit($item->message, 40) }}</h5></td>
                                        <td><h5>{{ $item->created_at->diffForHumans() }}</h5></td>
                                        <td>
                                            <a href="{{ route('contact.view',$item->id) }}" class="btn btn-inverse-info btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="file"></i>
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
