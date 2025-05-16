@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="mx-2">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Topics</h2>
                <a href="{{ route('topic.create') }}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new
                    topic</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Content</th>
                            <th scope="col">No. of views</th>
                            <th scope="col">Published</th>
                            <th scope="col">Trending</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <th scope="row">{{ $topic->created_at->format(' d F Y') }}</th>
                                <td><a class="text-decoration-none text-dark"
                                        href="{{ route('topic.show', $topic) }}">{{ $topic->title }}</a>
                                </td>
                                <td>{{ $topic->category->category }}</td>
                                <td>{{ Str::limit($topic->content, 30, '...') }}</td>
                                <td>{{ $topic->views }}</td>
                                <td>{{ $topic->published ? 'YES' : 'NO' }}</td>
                                <td>{{ $topic->trending ? 'YES' : 'NO' }}</td>
                                <td class="text-center">
                                    <a class="text-decoration-none text-dark" href="{{ route('topic.edit', $topic) }}">
                                        <img src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}">
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('topic.destroy', $topic) }}">
                                        @csrf
                                        @method('delete')
                                        <button style="background-color: transparent; border: none; color: inherit;"
                                            type="submit"
                                            onclick = "return confirm('Are you sure you want to delete this item?')">
                                            <img src="{{ asset('assets/admin/images/trash-can-svgrepo-com.svg') }}">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
