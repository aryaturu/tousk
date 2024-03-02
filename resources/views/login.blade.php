<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (other head elements) ... -->
    <style>
        body {
            background: url('/img/slide/slide-1.jpg') center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
    </style>

<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />

<title>Hidayah Bootstrap Template - Index</title>
<meta content="" name="description" />
<meta content="" name="keywords" />

<!-- Favicons -->
<link href="/img/favicon.png" rel="icon" />
<link href="/img/apple-touch-icon.png" rel="apple-touch-icon" />

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
  rel="stylesheet"
/>

<!-- Vendor CSS Files -->
<link href="/vendor/animate.css/animate.min.css" rel="stylesheet" />
<link
  href="/vendor/bootstrap/css/bootstrap.min.css"
  rel="stylesheet"
/>
<link
  href="/vendor/bootstrap-icons/bootstrap-icons.css"
  rel="stylesheet"
/>
<link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
<link
  href="/vendor/glightbox/css/glightbox.min.css"
  rel="stylesheet"
/>
<link href="/vendor/remixicon/remixicon.css" rel="stylesheet" />
<link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

<!-- Template Main CSS File -->
<link href="/css/style.css" rel="stylesheet" />

<!-- =======================================================
* Template Name: Hidayah
* Updated: Jan 29 2024 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login – USK</title>

    <!-- Favicons -->
    <link href="\assets\img\gg.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">Hidayah</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->
  
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="/">home</a></li>
          
             
            
             
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->
        </div>
      </header>
    <div class="container"><br><br><br><br><br><br><br><br>
        <div class="col-md-4 col-md-offset-4">
            
         
                <hr>

                @if(session('error'))
                <div class="alert alert-danger"> <b>Opps!</b> {{session('error')}} </div>
                @endif

                <form action="{{ route('actionlogin') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="text-light-emphasis">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <label class="text-light-emphasis">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Log
                        In</button>
                    <hr>
                    <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
                </form>
        </div>
    </div>
</body>

</html>