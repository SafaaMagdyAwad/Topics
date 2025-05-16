@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Testimonial</h2>
            <form action="{{ route('testimonial.update', $testimonial) }}" method="post" class="px-md-5"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-3 row">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="e.g. Jhon Doe" class="form-control py-2" name="name"
                            value="{{ old('name', $testimonial->name) }}" />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                    <div class="col-md-10">
                        <textarea name="content" id="" rows="5" class="form-control">{{ old('content', $testimonial->content) }}</textarea>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                    <div class="col-md-10">
                        <input type="hidden" name="published" class="form-check-input" style="padding: 0.7rem;"
                            value="0" />
                        <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published"
                            value="1" @checked(old('published', $testimonial->published)) />
                    </div>
                </div>
                @error('published')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;"
                            name="image" />
                        <input type="hidden" name="old_image" value="{{ $testimonial->image }}" />
                        @if ($testimonial->image)
                            <img src="{{ asset('assets/admin/images/testimonials/' . $testimonial->image) }}" alt=""
                                style="width: 10rem;">
                        @endif
                    </div>
                </div>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="text-md-end">
                    <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                        Edit Testimonial
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
