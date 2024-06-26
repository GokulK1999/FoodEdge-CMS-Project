<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="images/favicon.png" type="">
   <title>Food Edge Management System</title>
   <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
   <link href="home/css/font-awesome.min.css" rel="stylesheet" />
   <link href="home/css/style.css" rel="stylesheet" />
   <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
   <div class="hero_area">

      @if($route =="Home")
      @include('home.product')
      @elseif($route =="Menu")
      @include('home.view-menu-page')
      @endif




      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Swinburne AI Guys Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">Chatai</a>

         </p>
      </div>
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <script src="home/js/popper.min.js"></script>
      <script src="home/js/bootstrap.js"></script>
      <script src="home/js/custom.js"></script>
</body>

</html>