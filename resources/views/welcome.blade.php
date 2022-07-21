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
                        <a href="#" >
                        
                            <img src="{{ asset('logo.png')}}" alt="Pengabdian" width="90"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Home</a></li>
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

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Dewi <strong>Pelaga</strong></h1>
                        <p>Dewi Pelaga berkomunikasi dengan para pelaku UMKM lain untuk bersinergi, 
                            saling bertukar pikiran bahkan saling support dari sisi produk</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">UMKM</h5>
                                <p>Usaha mikro kecil menengah adalah istilah umum dalam dunia ekonomi yang merujuk kepada usaha ekonomi produktif yang dimiliki perorangan maupun badan usaha</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Olahraga</h5>
                                <p>Peralatan olahraga, disebut juga barang olahraga, adalah peralatan, material, dan pakaian yang digunakan untuk bertanding dalam suatu olahraga.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">Pendidikan</h5>
                                <p>Pendidikan adalah pembelajaran pengetahuan, keterampilan, dan kebiasaan sekelompok orang yang diturunkan dari satu generasi ke generasi berikutnya melalui pengajaran, pelatihan, atau penelitian.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Toko Terlaris</h1>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
               
                <div class="row">
                @foreach($user as $u)
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>{{$u->name}}</strong>
                        </a>
                    </div>
                    @endforeach
                 
                
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Informasi toko</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                @foreach($informasi as $i)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i>{{$i->namaInformasi}}</i>
                            <p>{{$i->isiInformasi}}</p>
                            <div class="user-image">
                               
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Catherine Soft</h3>
                                <span>Managing Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- ***** Testimonials Item End ***** -->
              
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Barang Terlaris</h2>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                @foreach($produk as $p)
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">{{$p->namaBarang}}</h3>
                        </div>
                        <div class="pricing-body">
                        
                                
                            <ul class="list">
                                <li class="active"><img src="{{asset($p->foto)}}" alt="" width="280"></li>
                                <li class="active">Jenis Barang : {{$p->jenisBarang}}</li>
                                <li class="active">Keterangan : {{$p->keteranganBarang}}</li>
                                <li class="active">Stok : {{$p->stok}}</li>
                                <li class="active">Harga : {{$p->hargaBarang}}</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="/detailProduk/{{$p->id}}" class="main-button">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>126</strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>Awards Wins</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>27</strong>
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Postingan Toko</h2>
                    </div>
                </div>
                            
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
            @foreach($posting as $p)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{$p->fotoPosting}}" alt="" width="300" height="200">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">{{$p->namaPosting}}</a>
                            </h3>
                            <div class="text">
                            {{$p->isiPosting}}
                            </div>
                            <a href="/detailPosting/{{$p->id}}" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
               
               @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us End ***** -->
    
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