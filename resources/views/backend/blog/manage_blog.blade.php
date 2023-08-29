@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Blog Manage</li>
            </ol>
            <a href="{{ route('add.blog') }}" type="button" class="btn btn-inverse-success">Add Blog</a>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Blog</h3>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Image</th>
                                        <th>blog name</th>
                                        <th>Blog category</th>
                                        <th>auth name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img style="width: 150px; height: 100px; object-fit:cover; border-radius:0;" src="{{ (!empty($item->blog_img)) ? url('uploads/blog/'.$item->blog_img) : url('uploads/no_image.jpg') }}" alt="profile">
                                        </td>
                                        <td><h5>{{ $item->blog_name }}</h5></td>
                                        <td><h5>{{ $item->category->category_name }}</h5></td>
                                        <td><h5>{{ $item->user->name }}</h5></td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge border border-success text-success">Active</span>
                                            @else
                                                <span class="badge border border-warning text-warning">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.blog',$item->id) }}" class="btn btn-inverse-info btn-sm">
                                                <i class="btn-icon-prepend" data-feather="edit"></i>
                                                Edit
                                            </a>
                                            <a href="{{ route('delete.blog',$item->id) }}" class="btn btn-inverse-danger btn-sm" id="delete">
                                                <i data-feather="trash-2"></i>
                                                Delete
                                            </a>
                                            @if($item->status == 1)
                                                <a href="{{ route('inactive.blog',$item->id) }}" class="btn btn-inverse-warning btn-sm" title="Inactive Now">
                                                    <i class="fa fa-arrow-down"></i>
                                                    Inactive
                                                </a>
                                            @else
                                                <a href="{{ route('active.blog',$item->id) }}" class="btn btn-inverse-success btn-sm" title="Active Now">
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
