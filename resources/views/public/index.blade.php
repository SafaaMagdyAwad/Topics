@extends('public.layout.main')
@section('content')
    @push('Links')
        @include('public.includes.indexLink')
    @endpush
    @include('public.includes.navbar'){{-- done --}}
    @include('public.includes.home'){{-- search was activated --}}
    @include('public.includes.index'){{-- latest 2 tobics --}}
    @include('public.includes.topics'){{-- categories, topics --}}
    @include('public.includes.how_it_works'){{-- static section --}}
    @include('public.includes.FAQs'){{-- static --}}
    @include('public.includes.testimonials'){{-- done --}}
    @include('public.includes.indexContact'){{-- static Data --}}
    @push('links')
        @include('public.includes.index_footer'){{-- done --}}
    @endpush
    @include('public.includes.footer')
@endsection
