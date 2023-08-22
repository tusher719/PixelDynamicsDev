@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Poftfolio</li>
            <li class="breadcrumb-item active" aria-current="page">Sub-Category</li>
        </ol>
    </nav>

	<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Table</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Category name</th>
                                    <th>SubCategory name</th>
                                    <th>SubCategory slag</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategory as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->category->category_name }}</td>
                                    <td>{{ $item->subcategory_name }}</td>
                                    <td>{{ $item->subcategory_slug }}</td>
                                    <td>
                                        <a href="{{ route('edit.subcategory',$item->id) }}" class="btn btn-inverse-warning">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit
                                        </a>
                                        <a href="{{ route('delete.subcategory',$item->id) }}" class="btn btn-inverse-danger" id="delete">
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

                    <h6 class="card-title">Category</h6>

					<form action="{{ route('store.subcategory') }}" method="POST" class="forms-sample" id="myForm">
                        @csrf
						<div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <select name="category_id" class="form-select">
                                <option selected="" disabled="">Select Group</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
                        <div class="mb-3">
							<label class="form-label">SubCategory Name</label>
							<input type="text" name="subcategory_name" class="form-control" placeholder="Enter subcategory name">
                            @error('subcategory_name')
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

@endsection
