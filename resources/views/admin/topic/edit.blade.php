@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Topic</h2>
            <form action="{{ route('topic.update', $topic) }}" method="post" class="px-md-5" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Topic Title:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="e.g. Design Patterns" class="form-control py-2" name="title"
                            value="{{ old('title', $topic->title) }}" />
                    </div>
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
                    <div class="col-md-10">
                        <select name="category_id" id="" class="form-control py-1">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($category->id == old('category_id', $category->id))>{{ $category->category }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                    <div class="col-md-10">
                        <textarea name="content" id="" rows="5" class="form-control">{{ $topic->content }}</textarea>
                    </div>
                </div>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Trending:</label>
                    <div class="col-md-10">
                        <input type="hidden" name="trending" class="form-check-input" style="padding: 0.7rem;"
                            value="0" />
                        <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="trending"
                            value="1" @checked(old('trending', $topic->trending)) />
                    </div>
                </div>
                @error('trending')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                    <div class="col-md-10">
                        <input type="hidden" name="published" class="form-check-input" style="padding: 0.7rem;"
                            value="0" />
                        <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published"
                            value="1" @checked(old('published', $topic->published)) />
                    </div>
                </div>
                @error('published')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr>
                <div class="form-group mb-3 row">

                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                    <div class="col-md-10">
                        <input type="hidden" name="old_image" value="{{ $topic->image }}" />
                        <input type="file" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;"
                            name="image" />
                        @if ($topic->image)
                            <img src="{{ asset('assets/admin/images/topics/' . $topic->image) }}" alt="{{ $topic->title }}"
                                style="width: 10rem;">
                        @endif
                    </div>
                </div>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="text-md-end">
                    <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                        Edit Topic
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
