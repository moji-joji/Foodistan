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


        <section class="position-relative pb-20 h-100"
            style="background-image: url('cronos-assets/images/homepage-hero.jpg'); background-size: cover; background-repeat: no-repeat;">


            <div class="">

                <div class="d-flex justify-content-center align-items-center">
                    <div class="input-group w-50 my-10 my-lg-40">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="width: 24px;height: 24px">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>-

        </section>ccccccc



        <section class="py-8">
            <div class="container">
                <div class="row">
                    @component('components.listing-card')
                    @endcomponent
                    @component('components.listing-card')
                    @endcomponent
                    @component('components.listing-card')
                    @endcomponent
                    @component('components.listing-card')
                    @endcomponent
                    @component('components.listing-card')
                    @endcomponent
                    @component('components.listing-card')
                    @endcomponent

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
