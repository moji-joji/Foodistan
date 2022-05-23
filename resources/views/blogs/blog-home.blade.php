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
            <div class="mw-3xl mt-5 mx-auto text-center">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="/">Home</a>
                    <svg class="mx-2" width="4" height="8" viewBox="0 0 4 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.12038 7.17461C-0.0593306 7.38428 -0.0350499 7.69993 0.174613 7.87964C0.384276 8.05935 0.699926 8.03507 0.879637 7.8254L3.87964 4.3254C4.04013 4.13816 4.04013 3.86186 3.87964 3.67461L0.879637 0.174613C0.699926 -0.0350495 0.384276 -0.0593303 0.174613 0.120381C-0.0350496 0.300092 -0.0593303 0.615742 0.120381 0.825405L2.84147 4.00001L0.12038 7.17461Z"
                            fill="#A8A29E"></path>
                    </svg>
                    <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="/blog">Blog
                    </a>
                </div>
            </div>
        </div>



        <section class="py-20">
            <div class="container">
                <div class="mw-5xl text-center mx-auto mb-16">

                    <h2 class="mt-6 mb-4">Recent blogposts</h2>
                    <p class="mw-xl mx-auto lead lh-lg text-muted">Discover interesting articles to read
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-md-6 mb-8">
                        <div class="bg-light p-6">
                            <div class="mb-4">
                                <img class="img-fluid w-100" style="height: 277px;"
                                    src="cronos-assets/images/icecream-blog.jpeg" alt="">

                            </div>
                            <span class="text-muted" style="font-size: 12px;">10 jun 2021 19:40</span>
                            <h3 class="my-4">Can Ice Cream Help You Lose Weight?</h3>
                            <p class="lead lh-lg text-muted mb-6">Ice creams are one of the most loved and consumed
                                sweets in the world. Whether it’s after delicious main courses or a random midnight
                                snack, ice creams serve best for all. They have this unique satisfying and fulfilling
                                attribute that compares to none....</p>
                            <a class="link-primary fw-bold text-decoration-none" href="/blog-post1">Read More</a>
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
