@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Edit USER</h2>
            <form action="{{ route('user.update', $user) }}" method="post" class="px-md-5">
                @csrf
                @method('put')
                <div class="form-group mb-3 row">

                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                    <div class="col-md-5">
                        @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" placeholder="First Name" class="form-control py-2" name="first_name"
                            value="{{ old('first_name', $user->first_name) }}" />
                    </div>
                    <div class="col-md-5">
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" placeholder="Last Name" class="form-control py-2" name="last_name"
                            value="{{ old('last_name', $user->last_name) }}" />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    @error('user_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="e.g. Jhon33" class="form-control py-2" name="user_name"
                            value="{{ old('user_name', $user->user_name) }}" />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    @error('email_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
                    <div class="col-md-10">
                        <input type="email" placeholder="e.g. Jhon@example.com" class="form-control py-2" name="email"
                            value="{{ old('email', $user->email) }}" />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
                    <div class="col-md-10">
                        <input type="password" placeholder="*******" class="form-control py-2" name="password" />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
                    <div class="col-md-10">

                        <input type="hidden" name="is_active" value="0" />
                        <input type="checkbox" class="form-check-input" value="1" style="padding: 0.7rem;"
                            name="is_active" @checked(old('is_active', $user->is_active)) />
                    </div>
                </div>
                <div class="text-md-end">
                    <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                        Edit User
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
