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
                <h2 class="fw-bold fs-2 col-auto">Unread Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages['unread'] as $message)
                            <tr>
                                <th scope="row">{{ $message->created_at->format(' d F Y') }}</th>
                                <td>
                                    <form action="{{ route('message.read', $message) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button class="text-decoration-none text-dark"
                                            style="background-color: transparent; border: none; color: inherit;"
                                            type="submit">
                                            {{ Str::limit($message->message, 30, '...') }}
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $message->name }}</td>
                                <td class="text-center">
                                    <form action="{{ route('message.destroy', $message) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            style="background-color: transparent; border: none; color: inherit;"
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
        <hr>
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">Read Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table2">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages['read'] as $message)
                            <tr>
                                <th scope="row">{{ $message->created_at->format(' d F Y') }}</th>
                                <td>
                                    <form action="{{ route('message.read', $message) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit"
                                            style="background-color: transparent; border: none; color: inherit;">
                                            {{ Str::limit($message->message, 30, '...') }}
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $message->name }}</td>
                                <td class="text-center">
                                    <form action="{{ route('message.destroy', $message) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            style="background-color: transparent; border: none; color: inherit;"
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
