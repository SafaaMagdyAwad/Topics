@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="mx-2">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Categories</h2>
                <a href="{{ route('category.create') }}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new
                    category</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->created_at->format(' d F Y') }}</th>
                                <td>{{ $category->category }}</td>
                                <td class="text-center"><a class="text-decoration-none text-dark"
                                        href="{{ route('category.edit', $category) }}"><img
                                            src="{{ asset('assets/admin/images/edit-svgrepo-com.svg') }}"></a></td>
                                <td>
                                    <form method="post" action="{{ route('category.destroy', $category) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="text-decoration-none text-dark"
                                            style="background-color: transparent; border: none; color: inherit;"
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
