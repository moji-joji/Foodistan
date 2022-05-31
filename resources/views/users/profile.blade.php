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
        <h3 class="text-center">Profile</h3>
        {{-- display name --}}
        <div class="mx-10">
            <h6>Name: <span>{{ auth()->user()->name }}</span></h6>
            <h6>Email: <span>{{ auth()->user()->email }}</span></h6>


        </div>

        <h4 class="text-center my-10">Blogs</h4>
        @foreach ($blogs as $blog)
            @component('components.blog-card', ['blog' => $blog])
            @endcomponent
        @endforeach


        <h4 class="text-center my-10">Liked Restaurants</h4>
        @foreach ($likedListings as $likedListing)
            <div class="h-30">

                @component('components.listing-card', ['listing' => $likedListing])
                @endcomponent
            </div>
        @endforeach

        <h4 class="text-center my-10">Reviewed Resteraunts</h4>
        @foreach ($reviewedListings as $reviewedListing)
            <div class="h-30">

                @component('components.listing-card', ['listing' => $reviewedListing])
                @endcomponent
            </div>
        @endforeach

        @component('components.footer')
        @endcomponent

    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
