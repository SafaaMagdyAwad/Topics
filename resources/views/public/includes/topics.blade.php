{{-- Topics --}}

<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Browse Topics</h1>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $category->category }}-tab"
                            data-bs-toggle="tab" data-bs-target="#{{ $category->category }}-tab-pane" type="button"
                            role="tab" aria-controls="{{ $category->category }}-tab-pane"
                            aria-selected="true">{{ $category->category }}</button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    @foreach ($categories as $category)
                        <div class="tab-pane fade  {{ $loop->first ? ' show active' : '' }}"
                            id="{{ $category->category }}-tab-pane" role="tabpanel"
                            aria-labelledby="{{ $category->category }}-tab" tabindex="0">
                            <div class="row">
                                @if ($category->topics->count() == 3)
                                    @include('public.includes.threeTopics')
                                @elseif ($category->topics->count() == 2)
                                    @include('public.includes.twoTopics')
                                @else
                                    @include('public.includes.oneTopic')
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
</section>
