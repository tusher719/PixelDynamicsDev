@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Poftfolio</li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('all.subcategory') }}">Sub-Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Sub-Category</li>
        </ol>
    </nav>

	<div class="row">

		<div class="col-md-6 mt-5">
			<div class="card">
				<div class="card-body">

                    <h6 class="card-title">Sub-Category</h6>

					<form action="{{ route('update.subcategory') }}" method="POST" class="forms-sample" id="myForm">
                        @csrf
                        <input type="hidden" name="id" value="{{ $subcategory->id }}">

                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <select name="category_id" class="form-select">
                                <option selected="" disabled="">Select Group</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $subcategory->category_id ? 'selected': '' }} >
                                    {{ $item->category_name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="mb-3">
							<label class="form-label">Sub-Category Name</label>
							<input type="text" name="subcategory_name" class="form-control" placeholder="Enter category name" value="{{ $subcategory->subcategory_name }}">
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
