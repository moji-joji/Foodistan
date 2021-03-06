<nav class="position-relative navbar navbar-expand-lg navbar-light py-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/cronos-assets/logos/food-2-logo-svg-vector.svg" alt="" width="32">
            <strong> Foodistan </strong>
        </a>
        <button class="btn p-0 d-lg-none navbar-burger">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="/http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.5 7C3.22386 7 3 6.77614 3 6.5C3 6.22386 3.22386 6 3.5 6H20.5C20.7761 6 21 6.22386 21 6.5C21 6.77614 20.7761 7 20.5 7H3.5ZM3.5 12C3.22386 12 3 11.7761 3 11.5C3 11.2239 3.22386 11 3.5 11H20.5C20.7761 11 21 11.2239 21 11.5C21 11.7761 20.7761 12 20.5 12H3.5ZM3 16.5C3 16.7761 3.22386 17 3.5 17H20.5C20.7761 17 21 16.7761 21 16.5C21 16.2239 20.7761 16 20.5 16H3.5C3.22386 16 3 16.2239 3 16.5Z"
                    fill="#006251"></path>
            </svg>
        </button>
        <ul class="d-none d-lg-flex position-absolute top-50 start-50 translate-middle navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

            <li class="nav-item"><a class="nav-link" href="/listing">Search</a></li>

            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="faq">Faq</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="/aboutus">About</a></li>

        </ul>


        @auth
            <div class="d-none d-lg-block">

                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <a href="/profile" class="text-decoration-none ml-3">
                        <img src="/cronos-assets/images/avatar.png" alt="" width="32" class="rounded-circle">
                        <span class="ml-4 bold ">{{ Auth::user()->name }}</span>
                    </a>
                    {{-- user name --}}

                    <button type="submit" class="btn btn-warning">
                        Logout
                    </button>
                </form>


            </div>
        @else
            <div class="d-none d-lg-block">
                <a class="btn text-primary" href="/login">Log In</a>
                <a class="btn btn-secondary" href="/register">Sign Up</a>
            </div>
        @endauth
    </div>
    <div class="d-none navbar-menu position-fixed top-0 start-0 bottom-0 w-75 mw-sm" style="z-index: 9999;">
        <div class="navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-primary" style="opacity: 90%;"></div>
        <nav class="position-relative h-100 w-100 d-flex flex-column py-6 px-6 navbar-light bg-white overflow-auto">
            <a class="navbar-brand" href="/">
                <img src="/cronos-assets/logos/food-2-logo-svg-vector.svg" alt="" width="32">
                <strong> Foodistan </strong>
            </a>
            <div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="/listing">Search</a></li>

                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq">Faq</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/aboutus">About</a></li>
                    @auth
                        <li class="nav-item">
                            <a href="/profile" class="text-decoration-none ml-3 my-3">
                                <img src="/cronos-assets/images/avatar.png" alt="" width="32" class="rounded-circle">
                                <span class="ml-4 bold ">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                    @endauth

                </ul>
            </div>
            <div class="mt-auto">
                @auth
                    <form class="inline" method="POST" action="/logout">
                        @csrf

                        <button type="submit" class="btn btn-warning w-100">
                            Logout
                        </button>
                    </form>
                @else
                    <div class="py-6"><a class="w-100 btn btn-primary mb-2" href="/login">Log In</a><a
                            class="w-100 btn btn-secondary" href="/register">Sign Up</a></div>
                @endauth
                <p class="mb-4 small text-center text-muted">?? 2022 All rights reserved.</p>

            </div>
        </nav>
    </div>
</nav>
