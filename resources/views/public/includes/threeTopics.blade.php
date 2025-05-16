@foreach ($category->topics as $topic)
    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
        <div class="custom-block bg-white shadow-lg">
            <a href="{{ route('topicsDetail', $topic) }}">
                <div class="d-flex">
                    <div>
                        <h5 class="mb-2">{{ $topic->title }}</h5>

                        <p class="mb-0">{{ $topic->category->category }}</p>
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
@endforeach
