@foreach ($category->topics as $topic)
    @if ($loop->first)
        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="custom-block bg-white shadow-lg">
                <a href="{{ route('topicsDetail', $topic) }}">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-2">{{ $topic->title }}</h5>

                            <p class="mb-0">{{ Str::limit($topic->content, 30, '...') }}</p>
                        </div>

                        <span class="badge bg-finance rounded-pill ms-auto">{{ $topic->views }}</span>
                    </div>
                    @if ($topic->image)
                        <img src="{{ asset('assets/admin/images/topics/' . $topic->image) }}"
                            class="custom-block-image img-fluid" alt="{{ $topic->title }}">
                    @else
                        {{-- a default image in case of image loss --}}
                        <img src="https://www.ifioque.com/assets/img/core/Diplo-Topic.webp"
                            class="custom-block-image img-fluid" alt="{{ $topic->title }}">
                    @endif

                </a>
            </div>
        </div>
    @else
        <div class="col-lg-6 col-md-6 col-12">
            <div class="custom-block custom-block-overlay">
                <div class="d-flex flex-column h-100">
                    <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block-overlay-text d-flex">
                        <div>
                            <h5 class="text-white mb-2">{{ $topic->title }}</h5>

                            <p class="text-white">{{ Str::limit($topic->content, 30, '...') }}</p>

                            <a href="{{ route('topicsDetail', $topic) }}" class="btn custom-btn mt-2 mt-lg-3">Learn
                                More</a>
                        </div>

                        <span class="badge bg-finance rounded-pill ms-auto">{{ $topic->views }}</span>
                    </div>

                    {{-- <div class="social-share d-flex">
                                                        <p class="text-white me-4">Share:</p>

                                                        <ul class="social-icon">
                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                                            </li>
                                                        </ul>

                                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                    </div> --}}

                    <div class="section-overlay"></div>
                </div>
            </div>
        </div>
    @endif
@endforeach
