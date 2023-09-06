<div class="card">
    <div class="card-header">
        <h2 class="card-title">Site Logo</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('store.logo') }}" method="POST" enctype="multipart/form-data" class="forms-sample" id="myForm">
            @csrf

            <input type="hidden" name="id" value="{{ $siteSetting->id }}">

            <div class="mb-3">
                <label class="form-label" for="formFile">File upload</label>
                <input name="sitelogo" class="form-control" type="file" id="photo">
            </div>
            
            <div class="mb-3">
                <img id="showImage" class="wd-150" src="{{ (!empty($siteSetting->sitelogo)) ? url('uploads/logo/'.$siteSetting->sitelogo) : url('uploads/no_image.jpg') }}" alt="profile">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="desc" class="form-control" value="{{ $siteSetting->desc }}" placeholder="Enter description">
            </div>

            <button type="submit" class="btn btn-primary me-2">
                <i class="btn-icon-prepend" data-feather="save"></i> Submit
            </button>
        </form>
    </div>
</div>

