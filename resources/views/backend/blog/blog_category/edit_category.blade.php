@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item"><a href="{{ route('all.blog.category') }}">Blog Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Blog Category</li>
        </ol>
    </nav>

	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">

                    <h6 class="card-title">Edit Blog Category</h6>

					<form action="{{ route('update.blog.category') }}" method="POST" class="forms-sample">
                        @csrf

                        <input type="hidden" name="id" value="{{ $category->id }}">

                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}" placeholder="Enter category name">
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
