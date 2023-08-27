@extends('admin.admin_dashboard')
@section('admin')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Photos</li>
        </ol>
    </nav>

	<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Photos</h6>

                    <div class="row">
                        @foreach ($photos as $item)
                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ url('uploads/photos/'.$item->photos)  }}" class="card-img-top" alt="{{$item->photos}}" style="height: 250px; object-fit: contain">
                                <div class="card-body">
                                    <p class="card-text mb-3">https://pixeldynamics.studio/uploads/photos/{{$item->photos}}</p>
                                    <a href="{{ route('delete.photos',$item->id) }}" class="btn btn-inverse-danger btn-sm" id="delete">
                                        <i data-feather="trash-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-body">

                    <h6 class="card-title">Add Photos</h6>

					<form action="{{ route('store.photos') }}" method="POST" enctype="multipart/form-data" class="forms-sample" id="myForm">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="formFile">File upload (Max file size: 512 kb)</label>
                            <input name="photos" class="form-control" type="file" id="photo">
                            @error('photos')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <img id="showImage" class="wd-300" src="{{ (!empty($profileData->photo)) ? url('uploads/admin_images/'.$profileData->photo) : url('uploads/no_image.jpg') }}" alt="profile">
                        </div>

						<button type="submit" class="btn btn-primary me-2">Submit</button>
					</form>

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
