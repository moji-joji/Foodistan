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
    <div class="">
        @component('components.header')
        @endcomponent

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
                    <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="#">Contact
                    </a>
                </div>
            </div>
        </div>




        <section class="position-relative py-20 bg-primary overflow-hidden">
            <div class="d-none d-md-block position-absolute top-0 start-0 bg-white w-75 h-100"></div>
            <div class="d-md-none position-absolute top-0 start-0 bg-white w-100 h-100"></div>
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-10 mb-lg-0">
                        <div class="mw-lg-md mb-10 mb-lg-24">
                            <h2 class="mb-4">Got questions?</h2>
                            <p class="lead lh-lg text-muted">We would like to hear from you. Your suggestions and
                                complaints are of high value to us. Feel free to reach out to us</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-5 mb-md-0">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 10L6 6V38L18 42M18 10L30 6M18 10V42M30 6L42 10V42L30 38M30 6V38M30 38L18 42"
                                        stroke="#006251" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <h6 class="mt-3 mb-2">Visit Us</h6>
                                <p class="text-muted mb-1">
                                    136-B Punjab Cooperative Housing Society</p>
                                <p class="text-muted mb-0">DHA Road Cantt Lahore, Pakistan</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.9988 32.9533V38.3729C42.0072 40.4446 40.1444 42.1746 38.0528 41.9859C20 42 6 27.87 6.01413 9.93837C5.82575 7.85789 7.54715 6.00212 9.61622 6.00018H15.0465C15.9249 5.99155 16.7766 6.302 17.4426 6.87368C19.3363 8.49899 20.5543 14.0155 20.0856 16.2086C19.7197 17.9207 17.9938 19.1186 16.8204 20.2897C19.3972 24.8124 23.1493 28.5571 27.6809 31.1288C28.8544 29.9577 30.0546 28.2351 31.7702 27.87C33.9709 27.4016 39.523 28.6213 41.1418 30.5281C41.7158 31.2042 42.0208 32.0674 41.9988 32.9533Z"
                                        stroke="#006251" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <h6 class="mt-3 mb-2">Contact Us</h6>
                                <p class="text-muted mb-1">hello@foodistan.org</p>
                                <p class="text-muted mb-0">+ 92-313-7829123</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 position-relative">
                        <div class="position-relative py-12 px-10 bg-white shadow-lg text-center">
                            <img class="d-none d-lg-block position-absolute bottom-100 start-50" style="height: 88px;"
                                src="cronos-assets/elements/green-light-left.svg" alt="">
                            <img class="d-none d-lg-block position-absolute top-100 start-50" style="height: 88px;"
                                src="cronos-assets/elements/light-green-left.svg" alt="">
                            <form action="#">
                                <span class="badge bg-secondary-light">CONTACT US</span>
                                <h3 class="mt-6 mb-6">Send us a message and we will get back to you</h3>
                                <input class="form-control mb-6" type="text" placeholder="Name" required>
                                <input class="form-control mb-6" type="email" placeholder="E-mail address" required>
                                <textarea class="form-control mb-6" name="message" cols="30" rows="10" placeholder="Your Message..."
                                    required></textarea>
                                <button class="btn btn-secondary w-100">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @component('components.footer')
        @endcomponent

    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
