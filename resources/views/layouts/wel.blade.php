<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Pengabdian</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pinko/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('pinko/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('pinko/assets/css/templatemo-softy-pinko.css')}}">

    </head>
    
    <body>
    
   
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                      
                            <img src="{{ asset('logo.png')}}" alt="Softy Pinko" width="90"/>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                            <li><a href="/listPosting">Postingan Social Media</a></li>
                            <li><a href="/listProduk">Barang Yang Dijual</a></li>
                            <li><a href="listInformasi">Informasi Toko</a></li>
                            <li><a href="/register">Daftar</a></li>
                            <li><a href="/login">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
    </div>
    <!-- ***** Welcome Area End ***** -->

    @yield('content')
   
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2020 Softy Pinko Company - Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </footer>
     
    <!-- jQuery -->
    <script src="{{ asset('pinko/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('pinko/assets/js/popper.js')}}"></script>
    <script src="{{ asset('pinko/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('pinko/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('pinko/assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('pinko/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('pinko/assets/js/imgfix.min.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('pinko/assets/js/custom.js')}}"></script>


  </body>
</html>