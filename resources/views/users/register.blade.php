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
  
 
  {{-- <link rel="icon" href="favicon.ico"> --}}
</head>

<body>

<section class="position-relative py-20 py-lg-32">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="mw-lg-md text-center">
            <form method="POST" action="/users">
             @csrf
              <a href="/">
                <img src="cronos-assets/logos/food-2-logo-svg-vector.svg" alt="" width="132">

            </a>
              <h3 class="mt-6 mb-8">Create new account</h3>
              <div class="mb-6">
              <input class="form-control mb-6" type="text" placeholder="Your Name" name="name" value="{{old('name')}}">
              @error('name')
              <p class="text-danger">{{$message}}</p>
              
              @enderror
            </div>
            <div class="mb-6">
              <input class="form-control mb-6" type="email" placeholder="Your Email" name="email" value="{{old('email')}}">
              @error('email')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="mb-6">
              <input class="form-control mb-6" type="password" placeholder="Password" name="password" value="{{old('password')}}">
              @error('password')
              <p class="text-danger">{{$message}}</p>

              @enderror
            </div>
            <div class="mb-6">
              <input class="form-control mb-6" type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}">
              @error('password-confirmation')
              <p class="text-danger">{{$message}}</p>

              @enderror
            </div>


           
              
              <button class="btn btn-primary w-10">Sign Up</button>
            </form>
            <div class="mt-8">
              <p>
                Already have an account?
                <a href="/login" class="text-laravel">Login</a>
              </p>
            </div>
    
          </div>
        </div>
        <div class="d-none d-lg-block position-absolute top-0 end-0 bottom-0 w-50" style="background-image:url('cronos-assets/images/signup-page-img.jpg'); background-repeat: no-repeat; background-size: cover;">
          <img class="position-absolute top-0 start-0 translate-middle-x" style="height: 88px;" src="cronos-assets/elements/green-light-left.svg" alt="">
          <img class="position-absolute bottom-0 start-0 translate-middle-x" style="height: 88px;" src="cronos-assets/elements/light-green-left.svg" alt="">
        </div>
      </div>
    </div>
  </section>

</body>
</html>