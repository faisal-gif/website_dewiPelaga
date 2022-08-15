@extends('layouts.wel')

@section('content')
<div class="welcome-area" id="welcome">

<!-- ***** Header Text Start ***** -->
<div class="header-text">
    <div class="container">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                <h1>{{$jenis}}</h1>
           
            </div>
        </div>
    </div>
    
</div>
<!-- ***** Header Text End ***** -->

</div>
    <!-- ***** Features Small Start ***** -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($informasi as $i)
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <a href="/listProduk/{{$i->idUser}}">
                            <div class="features-small-item">
                                <div class="icon">
                                <i class="fa fa-shopping-cart" style="font-size:30px;"></i>
                                </div>
                                <h5 class="features-title">{{$i->namaInformasi}}</h5>
                                <p>{{ substr($i->isiInformasi,2,100) }}</p>
                            </div>
                            </a>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

@endsection
