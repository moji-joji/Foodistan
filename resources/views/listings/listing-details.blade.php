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
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">


    <link rel="icon" href="/favicon.ico">
</head>

<body>

    @component('components.header')
    @endcomponent


    <div class="position-relative">
        <img class="w-100 img-fluid" style="height: 448px; object-fit: cover;" src="/cronos-assets/images/{{$listing->main_image}}" alt="">
         
    </div>



    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                <div class="mw-lg-md ">
                    <h3 class="my-3 py-12">{{ $listing->title }} <span
                            class="text-primary border-left-20">{{ $listing->avg_rating }}/5</span>
                    </h3>
                    <span class="d-inline-block px-2 bg-secondary-light text-danger rounded-pill small my-2">
                        Category</span>
                    <p class="lead lh-lg text-muted mb-6">{{ $listing->description }}</p>

                </div>

                <div class="views ">

                    <img src="/cronos-assets/images/eye.svg" width="30px" alt="">

                    {{ $listing->views }}
                    <span class="mx-3"></span>
                    <img src="/cronos-assets/images/heart-black.svg" width="30px" alt=""> {{ $listing->likes }}
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-12">
                <div class="p-5 bg-light-light d-flex flex-column justify-content-between ">
                    <h4>Business Info</h4>

                    <a href="" class="text-decoration-none">

                        <div class="text-muted"><strong> Address:</strong> {{ $listing->address }}</div>
                    </a>

                    <a href="" class="text-decoration-none">

                        <div class="text-muted"><strong>Phone Number:</strong> {{ $listing->phone_number }}</div>
                    </a>
                    <a href="" class="text-decoration-none">

                        <div class="text-muted"><strong>Website:</strong>{{ $listing->website }}</div>
                    </a>
                    <a href="" class="text-decoration-none">

                        <div class="text-muted"><strong>Email:</strong> {{ $listing->email }}</div>
                    </a>
                    <a href="" class="text-decoration-none">

                        <div class="d-flex justify-content-center my-10">
                    </a>

                    <a href="{{ $listing->facebook_url }}" class="mx-5"><img
                            src="/cronos-assets/logos/brands/facebook.svg" alt=""></a>
                    <a href="{{ $listing->instagram_url }}" class="mx-5"><img
                            src="/cronos-assets/logos/brands/instagram.svg" alt=""></a>
                    <a href="{{ $listing->twitter_url }}" class="mx-5"><img
                            src="/cronos-assets/logos/brands/twitter.svg" alt=""></a>
                </div>

            </div>
        </div>








        <section class="pt-10 pb-0 ">
            <div class="container  mb-lg-12">
                <div class="row align-items">
                    <div class="col-12 col-lg-6 mb-6 mb-lg-0 align-self-end">
                        <h4>Find us on map</h4>
                    </div>

                </div>
            </div>
            <div class="position-relative">
                <iframe style="height:448px;width:100%;border:0;" frameborder="0"
                    src="{{ $listing->location_slug }}"></iframe>


            </div>

        </section>


        <section class="py-8 w-70 mb-10">
            <h3>Reviews</h3>
            <div class="">

                <div class="container ">
                    <div class="p-6 bg-white rounded shadow mb-10">
                        <div class="d-flex mb-4 align-items-start justify-content-between">
                            <div class="d-flex align-items-center">

                                <div>
                                    <div class="d-flex mb-2 align-items-center">

                                        <h3 class="h6">Jane Grant</h3>
                                        <span
                                            class="d-inline-block mx-3 py-1 px-2 me-2 bg-primary-light text-primary rounded small">4/5</span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn p-0 text-secondary">
                                <svg viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    style="width: 12px;height: 12px">
                                    <path
                                        d="M6 0.666687C5.26667 0.666687 4.66667 1.26669 4.66667 2.00002C4.66667 2.73335 5.26667 3.33335 6 3.33335C6.73333 3.33335 7.33333 2.73335 7.33333 2.00002C7.33333 1.26669 6.73333 0.666687 6 0.666687ZM1.33333 0.666687C0.6 0.666687 0 1.26669 0 2.00002C0 2.73335 0.6 3.33335 1.33333 3.33335C2.06667 3.33335 2.66667 2.73335 2.66667 2.00002C2.66667 1.26669 2.06667 0.666687 1.33333 0.666687ZM10.6667 0.666687C9.93333 0.666687 9.33333 1.26669 9.33333 2.00002C9.33333 2.73335 9.93333 3.33335 10.6667 3.33335C11.4 3.33335 12 2.73335 12 2.00002C12 1.26669 11.4 0.666687 10.6667 0.666687Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="mb-5">
                            <p class="mb-8 small">Great place to have fun with your family. Food is also good, my
                                kids love it. They are smooth and look almost baked to perfection but Pakistan's look
                                like the ones you get from the local market.</p>

                        </div>
                    </div>

                </div>


            </div>



        </section>






        <div class="mb-10 align-items-center justify-content-between ">
            <h4 class="mb-0  my-5 margin-bottom-10 ">Tags</h2>
                <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Restaurant
                </span>
                <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Fast food
                </span> <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Kids
                </span> <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Burgers
                </span> <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Pizza
                </span>
        </div>
    </div>
    </div>

    @component('components.footer')
    @endcomponent

    </div>
    <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
