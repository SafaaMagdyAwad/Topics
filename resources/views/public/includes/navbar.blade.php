<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <i class="bi-back"></i>
            <span>Topic</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            @stack('Links')

            <div class="d-none d-lg-block">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ route('topic.index') }}" class="navbar-icon bi-person smoothscroll"></a>
                        @else
                            <a href="{{ route('register') }}" class="navbar-icon bi-person smoothscroll"></a>
                        @endauth


                    </nav>
                @endif
            </div>
        </div>
    </div>
</nav>


{{-- <script>
    anchors = Array.from(document.getElementsByClassName("nav-item nav-link"))

    anchors.forEach(function (anchor) {
        if (anchor.href === window.location.href) {
            anchor.className = "nav-item nav-link active"
        } else {
            anchor.className = "nav-item nav-link"
        }
    })

</script> --}}
