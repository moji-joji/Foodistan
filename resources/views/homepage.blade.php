<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodistan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">


    <link rel="icon" href="favicon.ico">
</head>

<body>

    @auth
        <div class="bg-primary text-light login-msg">You are logged in</div>
        {{-- {{-- @else --}}
    @endauth
    <div class="">

        <section class="position-relative pb-20"
            style="background-image: url('cronos-assets/images/homepage-hero.jpg'); background-size: cover; background-repeat: no-repeat;">
            <div class="position-absolute top-0 bottom-0 start-0 end-0 bg-dark" style="opacity: 80%;"></div>
            <div class="position-relative">
                <nav class="navbar navbar-expand-lg navbar-dark py-5 mb-10 mb-lg-16">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="cronos-assets/logos/food-2-logo-svg-vector.svg" alt="" width="32">
                            <strong> Foodistan </strong>
                        </a>
                        <button class="btn-secondary p-0 d-lg-none navbar-burger">
                            <svg class="" width="24" height="24" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.5 7C3.22386 7 3 6.77614 3 6.5C3 6.22386 3.22386 6 3.5 6H20.5C20.7761 6 21 6.22386 21 6.5C21 6.77614 20.7761 7 20.5 7H3.5ZM3.5 12C3.22386 12 3 11.7761 3 11.5C3 11.2239 3.22386 11 3.5 11H20.5C20.7761 11 21 11.2239 21 11.5C21 11.7761 20.7761 12 20.5 12H3.5ZM3 16.5C3 16.7761 3.22386 17 3.5 17H20.5C20.7761 17 21 16.7761 21 16.5C21 16.2239 20.7761 16 20.5 16H3.5C3.22386 16 3 16.2239 3 16.5Z"
                                    fill="#006251"></path>
                            </svg>
                        </button>
                        <ul class="d-none d-lg-flex position-absolute top-50 start-50 translate-middle navbar-nav">

                            <li class="nav-item"><a class="nav-link" href="listing">Search</a></li>

                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="/faq">Faq</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="/aboutus">About</a></li>

                        </ul>
                        @auth
                            <div class="d-none d-lg-block">

                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">
                                        Logout
                                    </button>
                                </form>


                            </div>
                        @else
                            <div class="d-none d-lg-block">
                                <a class="btn text-light" href="/login">Log In</a>
                                <a class="btn btn-secondary" href="/register">Sign Up</a>
                            </div>
                        @endauth
                    </div>
                </nav>
                <div class="container">
                    <div class="mw-2xl mx-auto text-center mb-20 mb-lg-32">
                        <span class="text-light">Reward your taste buds</span>
                        <h1 class="text-white mt-2">
                            <span>Explore new</span>
                            <span class="d-block text-secondary">restaurants</span>
                            <span>every day.</span>
                        </h1>

                        {{-- this will search for place --}}
                        <a class="btn btn-primary mt-5" href="/listing">Get Started</a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 mb-10 mb-lg-0">
                            <div class="d-flex">
                                <span class="mt-n2 me-5">
                                    <img width="80" height="80" fill="none" src="cronos-assets/logos/speed-icon.svg">
                                    </img>
                                </span>
                                <div>
                                    <h5 class="text-white">Quick search</h5>
                                    <p class="text-light lead lh-lg">Find a new place to eat within 3 seconds!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mb-10 mb-lg-0">
                            <div class="d-flex">
                                <span class="mt-n2 me-5">
                                    <img width="80" height="80" fill="none" src="cronos-assets/logos/rating-icon.svg">
                                    </img>
                                </span>
                                <div>
                                    <h5 class="text-white">Reviews</h5>
                                    <p class="text-light lead lh-lg">Don't trust us? Read what the people have to say
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="d-flex">
                                <span class="mt-n2 me-5">
                                    <img width="80" height="80" fill="none" src="cronos-assets/logos/blog-icon.svg">
                                    </img>
                                </span>
                                <div>
                                    <h5 class="text-white">Blog</h5>
                                    <p class="text-light lead lh-lg">Read our immersive blog to find your next hangout
                                        spot</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none navbar-menu position-fixed top-0 start-0 bottom-0 w-75 mw-sm" style="z-index: 9999;">
                <div class="navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-primary"
                    style="opacity: 90%;"></div>
                <nav
                    class="position-relative h-100 w-100 d-flex flex-column py-6 px-6 navbar-light bg-white overflow-auto">
                    <div class="d-flex align-items-center mb-10">
                        <a class="me-auto navbar-brand" href="#">
                            <img src="cronos-assets/logos/food-2-logo-svg-vector.svg" alt="" width="32">

                        </a>
                        <button class="navbar-close btn-close " type="button" aria-label="Close"></button>
                    </div>
                    <div>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="listing">Search</a></li>

                            <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="/faq">Faq</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="/aboutus">About</a></li>
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
                        <p class="mb-4 small text-center text-muted">© 2022 All rights reserved.</p>

                    </div>
                </nav>
            </div>
        </section>



        <section class="py-20 bg-primary">
            <div class="container">
                <div class="row align-items-center">

                    <div class="d-flex justify-content-center mb-10 d-lg-none">


                    </div>
                    <div class="col-12 col-lg-8 mx-auto text-center">
                        <span class="badge bg-success text-white">For foodies by foodies</span>
                        <h2 class="mt-6 mb-4 text-white">Don't know where to eat? </h2>
                        <p class="mw-xl mx-auto lead text-light mb-6">Tell us your preferences and let us take care of
                            the rest</p>
                        <a class="btn btn-secondary" href="/listing">Try Now</a>
                    </div>


                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-16">
                        <div class="mb-10">
                            <img class="img-fluid w-100" style="height:400px; object-fit: cover;"
                                src="cronos-assets/images/homepage-blog1.jpg" alt="">
                        </div>
                        <span class="small text-muted" style="font-size: 12px;">10 jun 2021 19:40</span>
                        <h3 class="mt-4 mb-4">Introduction to Pakistani cuisine</h3>
                        <h6 class="mb-6 fw-normal lh-lg text-muted">Biryani, Palau, and Nihari- we all are aware of
                            these mouth-watering food delights in Pakistan. Pakistani cuisine is a rich, exotic, and
                            irresistible collection of dishes. From the spiciness of the Qurma to the sweetness of
                            Kheer, every meal in Pakistan represents the nation’s love for flavorful food. However, the
                            details of this enthralling cuisine are yet to unravel. Read more!</h6>
                        <a class="link-primary text-decoration-none fw-bold" href="#">Read more</a>
                    </div>
                    <div class="col-12 col-lg-4 mb-16">
                        <div class="mb-10">
                            <img class="img-fluid w-100" style="height:400px; object-fit: cover;"
                                src="cronos-assets/images/homepage-blog2.jpg" alt="">
                        </div>
                        <span class="small text-muted" style="font-size: 12px;">10 jun 2021 19:40</span>
                        <h3 class="mt-4 mb-4">Chicken Sandwich Variations</h3>
                        <h6 class="mb-6 fw-normal lh-lg text-muted">Chicken is an all-time star and a versatile
                            ingredient. The aromatic, though a little bland, white meat goes perfectly well with almost
                            every recipe.</h6>
                        <a class="link-primary text-decoration-none fw-bold" href="#">Read more</a>
                    </div>
                    <div class="col-12 col-lg-4 mb-16 mb-lg-0">

                    </div>
                </div>
        </section>

        <section class="py-20">
            <div class="container">
                <div class="py-16 py-lg-24 px-10 px-lg-28 bg-primary position-relative">
                    <img class="d-none d-md-block position-absolute top-0 start-0 translate-middle"
                        src="cronos-assets/elements/left-squares.svg" alt="">
                    <img class="d-none d-md-block position-absolute top-100 start-100 translate-middle"
                        src="cronos-assets/elements/right-squares.svg" alt="">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-7 mb-6 mb-lg-0">
                            <h3 class="fw-bold text-white mb-4">Get exciting offers in your inbox</h3>
                            <p class="text-light">Subscribe to our newsletter to be join our family</p>
                        </div>
                        <div class="col-12 col-lg-5">
                            <form action="#">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="E-mail address">
                                    <button class="btn btn-secondary">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                        <div class="mw-lg-md">
                            <span class="badge bg-secondary-light">Guide</span>
                            <h3 class="my-6">How it works</h3>
                            <p class="lead lh-lg text-muted mb-6">We feature the best of the best restaurants in
                                Pakistan, these restaurants were carefully selected after consideration of a number of
                                factors. These factors include hygiene, cuisine type, restaurant options available,
                                popularity, and so on.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="p-12 bg-light-light">
                            <div class="d-flex mb-8">
                                <span
                                    class="flex-shrink-0 d-flex align-items-center justify-content-center bg-secondary fw-bold me-6"
                                    style="width: 64px; height: 64px;">1</span>
                                <div>
                                    <h6 class="mb-3">Search</h6>
                                    <p class="lead lh-lg text-muted">Use various keywords and filters to search.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-8">
                                <span
                                    class="flex-shrink-0 d-flex align-items-center justify-content-center bg-secondary fw-bold me-6"
                                    style="width: 64px; height: 64px;">2</span>
                                <div>
                                    <h6 class="mb-3">Browse</h6>
                                    <p class="lead lh-lg text-muted">Browse through the list of restaurants and see
                                        ratings</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span
                                    class="flex-shrink-0 d-flex align-items-center justify-content-center bg-secondary fw-bold me-6"
                                    style="width: 64px; height: 64px;">3</span>
                                <div>
                                    <h6 class="mb-3">Enjoy</h6>
                                    <p class="lead lh-lg text-muted">See the ratings and let your taste buds guide you
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20">
            <div class="container position-relative text-center">
                <div class="mw-4xl mx-auto mb-16 text-center">
                    <span class="badge bg-warning-light">Download App</span>
                    <h2 class="mt-6 mb-4">Have us just one click away</h2>
                    <p class="mw-xl mx-auto lead lh-lg text-muted mb-6">Download the app and enjoy delicious dinners
                        with us</p>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a class="me-4 mb-4 mb-sm-0" href="https://www.apple.com/app-store/">
                            <img src="cronos-assets/buttons/app-store.svg" alt="">
                        </a>
                        <a href="https://play.google.com/store/apps">
                            <img src="cronos-assets/buttons/google-play.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="mw-xl mx-auto">
                    <img class="img-fluid" src="cronos-assets/images/phone-half-three.png" alt="">
                </div>
            </div>
        </section>



        <!--
    Footer
    -->
        @component('components.footer')
        @endcomponent

    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
