<section class="section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h3 class="mb-4">Trending Topics</h3>
            </div>
            @foreach ($trending as $item)
                <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg">
                        <a href="{{ route('topicsDetail', $item) }}">
                            <div class="d-flex">
                                <div>
                                    <h5 class="mb-2">{{ $item['title'] }}</h5>

                                    <p class="mb-0">{{ Str::limit($item['content'], 30, '...') }}</p>
                                </div>

                                <span class="badge bg-finance rounded-pill ms-auto">{{ $item['views'] }}</span>
                            </div>
                            @if ($item['image'])
                                <img src="{{ asset('assets/admin/images/topics/' . $item['image']) }}"
                                    class="custom-block-image img-fluid" alt="{{ $item['title'] }}">
                            @else
                                <img src="https://www.ifioque.com/assets/img/core/Diplo-Topic.webp"
                                    class="custom-block-image img-fluid" alt="{{ $item['title'] }}">
                            @endif
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
