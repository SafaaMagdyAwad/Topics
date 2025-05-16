<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($topics as $topic)
                @if ($loop->first)
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="{{ route('topicsDetail', $topic) }}">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">{{ $topic->title }}</h5>

                                        <p class="mb-0">{{ Str::limit($topic->content, 30, '...') }}</p>
                                    </div>

                                    <span class="badge bg-design rounded-pill ms-auto">{{ $topic->views }}</span>
                                </div>
                                @if ($topic->image)
                                    <img src="{{ asset('assets/admin/images/topics/' . $topic->image) }}"
                                        class="custom-block-image img-fluid" alt="{{ $topic->title }}">
                                @else
                                    <img src="https://www.ifioque.com/assets/img/core/Diplo-Topic.webp"
                                        class="custom-block-image img-fluid" alt="{{ $topic->title }}">
                                @endif

                            </a>
                        </div>
                    </div>
                @else
                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                @if ($topic['image'])
                                    <img src="{{ asset('assets/admin/images/topics/' . $topic['image']) }}"
                                        class="custom-block-image img-fluid" alt="{{ $topic['title'] }}">
                                @else
                                    <img src="https://www.ifioque.com/assets/img/core/Diplo-Topic.webp"
                                        class="custom-block-image img-fluid" alt="{{ $topic['title'] }}">
                                @endif

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">{{ $topic['title'] }}</h5>

                                        <p class="text-white">{{ Str::limit($topic['content'], 30, '...') }}</p>

                                        <a href="{{ route('topicsDetail', $topic) }}"
                                            class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto">{{ $topic['views'] }}</span>
                                </div>



                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </div>
</section>
