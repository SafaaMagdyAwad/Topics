@extends('admin.layout.main')
@section('content')
    <div class="container my-5">
        <div class="mx-2">
            <div class="p-1">
                <div class="container-fluid g-0  pb-5 px-lg-5 px-md-3 px-1">
                    <div class="mx-auto " style="max-width: 1225px">
                        <article class="mx-md-4 ">
                            <h2 class="fs-1 py-4">{{ $message->subject }}</h2>
                            <p class="fw-bold"><small>From: {{ $message->name }}, {{ $message->email }}</small></p>
                            <p>
                                {{ $message->message }}
                            </p>
                            <div class="text-md-end">
                                <a class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5"
                                    href="{{ route('message.index') }}">
                                    Back to All Messaages
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    @endsection
