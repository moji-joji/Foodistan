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

    <div class="container">
        <div class="mw-3xl mt-5 mb-5 mx-auto text-center">
            <div class="d-flex justify-content-center align-items-center ">
                <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="/">Home</a>
                <svg class="mx-2" width="4" height="8" viewBox="0 0 4 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.12038 7.17461C-0.0593306 7.38428 -0.0350499 7.69993 0.174613 7.87964C0.384276 8.05935 0.699926 8.03507 0.879637 7.8254L3.87964 4.3254C4.04013 4.13816 4.04013 3.86186 3.87964 3.67461L0.879637 0.174613C0.699926 -0.0350495 0.384276 -0.0593303 0.174613 0.120381C-0.0350496 0.300092 -0.0593303 0.615742 0.120381 0.825405L2.84147 4.00001L0.12038 7.17461Z"
                        fill="#A8A29E"></path>
                </svg>
                <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="/listing">Search
                </a> <svg class="mx-2" width="4" height="8" viewBox="0 0 4 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.12038 7.17461C-0.0593306 7.38428 -0.0350499 7.69993 0.174613 7.87964C0.384276 8.05935 0.699926 8.03507 0.879637 7.8254L3.87964 4.3254C4.04013 4.13816 4.04013 3.86186 3.87964 3.67461L0.879637 0.174613C0.699926 -0.0350495 0.384276 -0.0593303 0.174613 0.120381C-0.0350496 0.300092 -0.0593303 0.615742 0.120381 0.825405L2.84147 4.00001L0.12038 7.17461Z"
                        fill="#A8A29E"></path>
                </svg>
                <a class="text-muted text-decoration-none fw-bold" style="font-size: 12px;" href="#">Restaurant
                </a>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img class="w-100 img-fluid" style="height: 448px; object-fit: cover;"
            src="/cronos-assets/images/{{ $listing->main_image }}" alt="">

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

                    @foreach ($reviews as $review)
                        @component('components.review', ['review' => $review])
                        @endcomponent
                    @endforeach


                    @auth
                        {{-- if user has already revied, dont let them review again --}}

                        @if ($listing->reviews->where('user_id', auth()->user()->id)->count() > 0)
                            <div class="alert alert-warning">
                                You have already reviewed this listing.
                            </div>
                        @else
                            <form method="POST" action="/listing/{{ $listing->id }}/review">
                                @csrf
                                <div class="mb-6">
                                    <label class="form-label" for="">Write your review</label>
                                    <textarea class="form-control" name="content" rows="3" placeholder="Write something..." required></textarea>

                                </div>
                                <label class="form-label" for="">Rating</label>
                                <input type="number" min="0" max="5" width="100px" name="rating" required>
                                <div></div>
                                <button class="btn btn-primary my-5 review-btn" type="submit" value="Post review">Post
                                    review</button>
                            </form>
                        @endif
                    @endauth
                    @guest
                        <p class="muted text-warning ">You must be logged in to post a review</p>
                    @endguest
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
