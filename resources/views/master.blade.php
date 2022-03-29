<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <title>@yield('title')</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('product')}}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog')}}">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('main-content')
  
   
  <footer class="py-3 bg-light">
    <p class="text-center text-success">All Rights Reserved</p>
  </footer>

   <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
   <script>
       var triggerEl = document.querySelector('#navId a')
       bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
   </script>
   <script src="{{asset('/js/jquery-3.6.0.js')}}"></script>
   <script src="{{asset('/js/bootstrap.js')}}"></script>
</body>
</html>