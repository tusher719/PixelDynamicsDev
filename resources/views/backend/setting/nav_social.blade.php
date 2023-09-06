<div class="card">
    <div class="card-header">
        <h2 class="card-title">Social Link</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('store.social') }}" method="POST" class="forms-sample" id="myForm">
            @csrf
            
            <input type="hidden" name="id" value="{{ $siteSetting->id }}">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Linkedin</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ $siteSetting->linkedin }}" placeholder="Linkedin link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $siteSetting->facebook }}" placeholder="Facebook link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="insta" class="form-control" value="{{ $siteSetting->insta }}" placeholder="Instagram link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $siteSetting->twitter }}" placeholder="Twitter link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Artstation</label>
                        <input type="text" name="artstation" class="form-control" value="{{ $siteSetting->artstation }}" placeholder="Artstation link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Behance</label>
                        <input type="text" name="behance" class="form-control" value="{{ $siteSetting->behance }}" placeholder="Behance link">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary me-2">
                <i class="btn-icon-prepend" data-feather="save"></i> Submit
            </button>
        </form>
    </div>
</div>

