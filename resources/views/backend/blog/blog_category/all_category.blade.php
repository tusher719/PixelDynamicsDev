@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active" aria-current="page">Blog Category</li>
        </ol>
    </nav>

	<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Blog Category</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogcat as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><h5>{{ $item->category_name }}</h5></td>
                                    <td><h5>{{ $item->category_slug }}</h5></td>
                                    <td>
                                        <a href="{{ route('edit.blog.category',$item->id) }}" class="btn btn-inverse-info btn-sm">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit
                                        </a>
                                        <a href="{{ route('delete.blog.category',$item->id) }}" class="btn btn-inverse-danger btn-sm" id="delete">
                                            <i data-feather="trash-2"></i>
                                            Delete
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

		<div class="col-md-4">
			<div class="card">
				<div class="card-body">

                    <h6 class="card-title">Add Blog Category</h6>

					<form action="{{ route('store.blog.category') }}" method="POST" class="forms-sample">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Enter category name">
                            @error('category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

						<button type="submit" class="btn btn-primary me-2">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</div>

</div>

@endsection
