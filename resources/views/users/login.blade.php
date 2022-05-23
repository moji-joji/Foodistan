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



    <section class="position-relative py-lg-20 bg-light-light">
        <div class="d-lg-none d-flex mb-10">
            <img class="img-fluid" src="cronos-assets/elements/left-top-corner.svg" alt="">
        </div>
        <img class="d-none d-lg-block position-absolute top-0 start-0" src="cronos-assets/elements/left-top-corner.svg"
            alt="">
        <img class="d-none d-lg-block position-absolute top-0 end-0" src="cronos-assets/elements/right-top-corner.svg"
            alt="">
        <img class="d-none d-lg-block position-absolute bottom-0 start-0"
            src="cronos-assets/elements/left-bottom-corner.svg" alt="">
        <img class="d-none d-lg-block position-absolute bottom-0 end-0"
            src="cronos-assets/elements/right-bottom-corner.svg" alt="">


        <div class="container">
            <div class="mw-3xl mb-12 mb-md-20 mx-auto text-center">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="/">Home</a>
                    <svg class="mx-2" width="4" height="8" viewBox="0 0 4 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.12038 7.17461C-0.0593306 7.38428 -0.0350499 7.69993 0.174613 7.87964C0.384276 8.05935 0.699926 8.03507 0.879637 7.8254L3.87964 4.3254C4.04013 4.13816 4.04013 3.86186 3.87964 3.67461L0.879637 0.174613C0.699926 -0.0350495 0.384276 -0.0593303 0.174613 0.120381C-0.0350496 0.300092 -0.0593303 0.615742 0.120381 0.825405L2.84147 4.00001L0.12038 7.17461Z"
                            fill="#A8A29E"></path>
                    </svg>
                    <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="#">Login
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="mw-xl mx-auto text-center">
                <div class="py-12 px-12 bg-white shadow-lg text-center">
                    <a href="/">
                        <img src="cronos-assets/logos/food-2-logo-svg-vector.svg" alt="" width="132">

                    </a>
                    <form method="POST" action="/login/authenticate">
                        @csrf

                        <h3 class="mt-6 mb-8">Login to your account</h3>

                        <div class="mb-6">
                            <input class="form-control mb-6" type="email" placeholder="Your Email" name="email"
                                value="{{ old('email') }}">

                        </div>
                        <div class="mb-6">
                            <input class="form-control mb-6" type="password" placeholder="Password" name="password"
                                value="{{ old('password') }}">
                            @if (session('message'))
                                <div class="text-danger">
                                    {{ session('message') }}
                            @endif
                        </div>



                        <div class="d-flex flex-column justify-content-start">


                            <button class="btn btn-primary w-10 my-2" type="submit">Login</button>
                            <a href="/recover" class=" my-2 text-warning">Forgot password</a>

                            <div class="text-muted my-2">Don't have an account? <a href="/register"
                                    class="bold">Sign up</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-lg-none d-flex mt-10">
            <img class="img-fluid ms-auto" src="cronos-assets/elements/right-bottom-corner.svg" alt="">
        </div>
    </section>

</body>

</html>
