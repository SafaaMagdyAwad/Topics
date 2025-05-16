@extends('public.layout.main')
@section('content')
    @push('Links')
        @include('public.includes.pagesLink')
    @endpush
    @include('public.includes.navbar'){{-- done --}}
    @include('public.includes.topic_list_header'){{-- done --}}
    @include('public.includes.topic_details'){{-- done --}}
    @include('public.includes.newsletter'){{-- static --}}
    @push('links')
        @include('public.includes.pages_footer'){{-- done --}}
    @endpush
    @include('public.includes.footer')
@endsection
