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


        <section class="py-20">
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
                        <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="/blog">Blog</a>
                        <svg class="mx-2" width="4" height="8" viewBox="0 0 4 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.12038 7.17461C-0.0593306 7.38428 -0.0350499 7.69993 0.174613 7.87964C0.384276 8.05935 0.699926 8.03507 0.879637 7.8254L3.87964 4.3254C4.04013 4.13816 4.04013 3.86186 3.87964 3.67461L0.879637 0.174613C0.699926 -0.0350495 0.384276 -0.0593303 0.174613 0.120381C-0.0350496 0.300092 -0.0593303 0.615742 0.120381 0.825405L2.84147 4.00001L0.12038 7.17461Z"
                                fill="#A8A29E"></path>
                        </svg>
                        <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="#">Article</a>
                    </div>


                    @component('components.blogpost')
                    @endcomponent
                    
                </div>
        </section>



        @component('components.footer')
        @endcomponent

    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
