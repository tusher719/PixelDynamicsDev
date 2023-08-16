@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Poftfolio</li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('portfolio.category') }}">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
        </ol>
    </nav>

	<div class="row">

		<div class="col-md-6 mt-5">
			<div class="card">
				<div class="card-body">

                    <h6 class="card-title">Category</h6>

					<form action="{{ route('update.category') }}" method="POST" class="forms-sample" id="myForm">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
						<div class="mb-3">
							<label class="form-label">Category Name</label>
							<input type="text" name="category_name" class="form-control" placeholder="Enter category name" value="{{ $category->category_name }}">
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
