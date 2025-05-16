<div class="p-3 text-center bg-white border-bottom welcome-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
                <a href="#" class="navbar-brand fs-2 fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                    </svg>

                    <span>Topic</span>
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-center justify-content-md-end align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropdown-center user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="true">
                            <img class="img-xs rounded-circle"
                                src="{{ asset('assets/admin/images/avatar-default.svg') }}" alt="Profile image" />
                        </a>
                        <div class="dropdown-menu dropdown-center navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle"
                                    src="{{ asset('assets/admin/images/avatar-default.svg') }}" alt="Profile image"
                                    width="80" height="80" />
                                <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->first_name }}
                                    {{ Auth::user()->last_name }}</p>
                                <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
                            </div>
                            <a class="dropdown-item">My Profile</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Sign Out</button>
                            </form>

                            <p class="footer" style="padding-top: 15px; font-size: 9px; text-align: center">
                                Privacy Policy . Terms . Cookies
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
