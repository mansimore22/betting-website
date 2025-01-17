@extends('admin.inc.main')
@section('contents')
   <main class="page-content">
<div class="row">
    <div class="col-xl-12">
        <h6 class="mb-0 text-uppercase">Create Banner</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <!-- Form for creating a new banner -->
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF token for security -->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="formFile" name="image_path" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
   </main>
@endsection
