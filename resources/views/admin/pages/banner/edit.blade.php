@extends('admin.inc.main')

@section('contents')
<main class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <h6 class="mb-0 text-uppercase">Edit Banner</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <!-- Form for editing the banner -->
                    <form action="{{ route('updatebanner', $banner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Current Banner Image</label>
                            <div>
                                <!-- Display current banner image -->
                                @if ($banner->image_path && file_exists(public_path($banner->image_path)))
                                    <img src="{{ asset($banner->image_path) }}" alt="Banner Image" width="100">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload New Image</label>
                            <input class="form-control" type="file" id="formFile" name="image_path">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
