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

        <section class="py-20 overflow-hidden">
            <div class="container">
              <div class="mw-xl mx-auto mb-12 text-center">
                <span class="badge bg-secondary-light">Gallery</span>
                <h2 class="mt-6">A glimpse of our work</h2>
              </div>
             
              <div class="row mb-10 mb-lg-16">
                <div class="col-12 col-lg-6 p-4">
                  <div class="row mb-n4">
                    <div class="col-12 col-lg-6 p-4">
                      <img class="img-fluid w-100" style="height: 255px; object-fit: cover;" src="cronos-assets/images/gallery-img1.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-6 p-4">
                      <img class="img-fluid w-100" style="height: 255px; object-fit: cover;" src="cronos-assets/images/gallery-img2.jpg" alt="">
                    </div>
                    <div class="col-12 p-4">
                      <div class="position-relative">
                        <img class="d-none d-lg-block position-absolute top-100 start-0 translate-middle-y" src="cronos-assets/elements/dark-green-dark-warning.svg" alt="">
                        <img class="img-fluid w-100" style="height: 510px; object-fit: cover;" src="cronos-assets/images/gallery-img3.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6 p-4">
                  <div class="row mb-n4">
                    <div class="col-12 p-4">
                      <div class="position-relative">
                        <img class="d-none d-lg-block position-absolute top-0 end-0" src="cronos-assets/elements/dark-green-dark-warning-right.svg" alt="">
                        <img class="img-fluid w-100" style="height: 510px; object-fit: cover;" src="cronos-assets/images/gallery-img4.jpg" alt="">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 p-4">
                      <img class="img-fluid w-100" style="height: 255px; object-fit: cover;" src="cronos-assets/images/gallery-img5.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-6 p-4">
                      <img class="img-fluid w-100" style="height: 255px; object-fit: cover;" src="cronos-assets/images/gallery-img6.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center"><a class="btn btn-primary" href="/aboutus">Learn More</a></div>
            </div>
          </section>

        @component('components.footer')
        @endcomponent

    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>