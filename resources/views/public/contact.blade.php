@extends('public.layout.main')
@section('content')
    @push('Links')
        @include('public.includes.pagesLink')
    @endpush
    @include('public.includes.navbar')
    @push('page')
        Contact Form
    @endpush
    @include('public.includes.header'){{-- done --}}
    
    @include('public.includes.contact'){{-- done --}}
    @push('links')
        @include('public.includes.pages_footer'){{-- done --}}
    @endpush
    @include('public.includes.footer')
@endsection
