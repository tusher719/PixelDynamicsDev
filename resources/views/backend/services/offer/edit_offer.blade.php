@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Poftfolio</li>
            <li class="breadcrumb-item"><a href="{{ route('all.offers') }}">Offers Manage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Offer</li>
        </ol>
    </nav>

	<div class="row">

		<div class="col-lg-12 col-md-12">
			<div class="card">
				<div class="card-body">

                    <h6 class="card-title">Edit Offer</h6>

					<form action="{{ route('update.offers') }}" method="POST" class="forms-sample" id="myForm">
                        @csrf
                        <input type="hidden" name="id" value="{{ $offers->id }}">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $offers->title }}" placeholder="Enter title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer</label>
                                    <input type="text" name="offer" class="form-control" value="{{ $offers->offer }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-2</label>
                                    <input type="text" name="offer2" class="form-control" value="{{ $offers->offer2 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-3</label>
                                    <input type="text" name="offer3" class="form-control" value="{{ $offers->offer3 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-4</label>
                                    <input type="text" name="offer4" class="form-control" value="{{ $offers->offer4 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-5</label>
                                    <input type="text" name="offer5" class="form-control" value="{{ $offers->offer5 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-6</label>
                                    <input type="text" name="offer6" class="form-control" value="{{ $offers->offer6 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-7</label>
                                    <input type="text" name="offer7" class="form-control" value="{{ $offers->offer7 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-8</label>
                                    <input type="text" name="offer8" class="form-control" value="{{ $offers->offer8 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-9</label>
                                    <input type="text" name="offer9" class="form-control" value="{{ $offers->offer9 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-10</label>
                                    <input type="text" name="offer10" class="form-control" value="{{ $offers->offer10 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-11</label>
                                    <input type="text" name="offer11" class="form-control" value="{{ $offers->offer11 }}" placeholder="Enter offer">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Offer-12</label>
                                    <input type="text" name="offer12" class="form-control" value="{{ $offers->offer12 }}" placeholder="Enter offer">
                                </div>
                            </div>

                        </div>
                        
						<button type="submit" class="btn btn-primary me-2">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</div>


</div>

@endsection
