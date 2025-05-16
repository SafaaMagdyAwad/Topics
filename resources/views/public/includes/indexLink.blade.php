<ul class="navbar-nav ms-lg-5 me-lg-auto">
    <li class="nav-item">
        <a class="nav-link click-scroll {{ active('index') }}" href="#section_1">Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_2">Browse Topics</a>
    </li>

    <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_3">How it works</a>
    </li>

    <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_4">FAQs</a>
    </li>

    <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_5">Testimonials</a>
    </li>

    <li class="nav-item">
        <a class="nav-link click-scroll" href="#section_6">Contact</a>
    </li>
    <li class="border"></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle inactive show" href="#" id="navbarLightDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="true">Pages</a>

        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item " href="{{ route('contact') }}">Contact Us</a></li>
            <li><a class="dropdown-item" href="{{ route('testimonials') }}">Our Client Says</a></li>
            <li><a class="dropdown-item" href="{{ route('topicsListing') }}">Topics Listing</a></li>
        </ul>
    </li>
</ul>
