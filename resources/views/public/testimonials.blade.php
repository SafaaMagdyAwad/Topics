@extends('public.layout.main')
@section('content')
    @push('Links')
        @include('public.includes.pagesLink')
    @endpush
    @include('public.includes.navbar'){{-- done --}}
    @push('page')
        Testimonials
    @endpush
    @include('public.includes.header'){{-- done --}}
    @include('public.includes.testimonials')
    @push('links')
        @include('public.includes.pages_footer'){{-- done --}}
    @endpush
    @include('public.includes.footer')
@endsection
