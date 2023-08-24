@extends('admin.admin_dashboard')
@section('admin')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active" aria-current="page">Offers Manage</li>
            </ol>
            <a href="{{ route('add.offers') }}" type="button" class="btn btn-inverse-success">Add Offer</a>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All Offer</h3>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Title</th>
                                        <th>Offer</th>
                                        <th>Offer-2</th>
                                        <th>Offer-3</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offers as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><h5>{{ $item->title }}</h5></td>
                                        <td><h5>{{ $item->offer }}</h5></td>
                                        <td><h5>{{ $item->offer }}</h5></td>
                                        <td><h5>{{ $item->offer }}</h5></td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge border border-success text-success">Active</span>
                                            @else
                                                <span class="badge border border-warning text-warning">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.offers',$item->id) }}" class="btn btn-inverse-info btn-sm">
                                                <i class="btn-icon-prepend" data-feather="edit"></i>
                                                Edit
                                            </a>
                                            <a href="{{ route('delete.offers',$item->id) }}" class="btn btn-inverse-danger btn-sm" id="delete">
                                                <i data-feather="trash-2"></i>
                                                Delete
                                            </a>
                                            @if($item->status == 1)
                                                <a href="{{ route('inactive.offers',$item->id) }}" class="btn btn-inverse-warning btn-sm" title="Inactive Now">
                                                    <i class="fa fa-arrow-down"></i>
                                                    Inactive
                                                </a>
                                            @else
                                                <a href="{{ route('active.offers',$item->id) }}" class="btn btn-inverse-success btn-sm" title="Active Now">
                                                    <i class="fa fa-arrow-up"></i>
                                                    Active
                                                </a>
                                            @endif
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
