@extends('public.layout.main')
@section('content')
    @push('Links')
        @include('public.includes.pagesLink'){{-- done --}}
    @endpush
    @include('public.includes.navbar'){{-- done --}}
    @push('page')
        Topics Listing
    @endpush
    @include('public.includes.header'){{-- done --}}
    @include('public.includes.popularTopics'){{-- pagination link dosent look good --}}
    @include('public.includes.trinding_topics')
    @push('links')
        @include('public.includes.pages_footer'){{-- done --}}
    @endpush
    @include('public.includes.footer')
@endsection
