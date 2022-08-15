@extends('layouts.wel')

@section('content')
 <!-- ***** Welcome Area Start ***** -->
 <div class="welcome-area" id="welcome">
@foreach($informasi as $i)
<!-- ***** Header Text Start ***** -->
<div class="header-text">
    <div class="container">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                <h1>{{$i->namaInformasi}}</h1>
                <p>{!! $i->isiInformasi !!}</p>
            </div>
        </div>
    </div>
    <a  class="btn btn-primary btn-lg btn-floating"  href="{{$i->socialMedia}}" role="button"><i class="fa fa-instagram"></i></a>
    <a  class="btn btn-primary btn-lg btn-floating"  href="{{$i->tokoOnline}}" role="button"><i class="fa fa-shopping-cart"></i></a>
                  
</div>
<!-- ***** Header Text End ***** -->
@endforeach
</div>
<!-- ***** Welcome Area End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Barang</h2>
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
                                @if($p->foto == " " || $p->foto == null)
                                <li class="active"><img src="{{ asset('default.png')}}" alt="" width="280"></li>
                                @else
                                <li class="active"><img src="{{$p->foto}}" alt="" width="280"></li>
                                @endif
                                <li class="active">Jenis Barang : {{$p->jenisBarang}}</li>
                                <li class="active">Keterangan : {!! $p->keteranganBarang !!}</li>
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
  
    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Artikel Terbaru</h1>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
               
                <div class="row">
                @foreach($posting as $p)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                <a href="/detailPosting/{{$p->id}}">
                            <div class="features-small-item">
                            @if($p->fotoPosting == " " || $p->fotoPosting == null)
                                <img src="{{ asset('default.png')}}" alt="" width="200">
                                @endif
                                <img src="{{$p->fotoPosting}}" alt="" width="200">
                                <h6 class="features-title">{{$p->namaPosting}}</h6>
                                <p>{!! $p->isiPosting !!}</p>
                            </div>
                </a>
                        </div>
                    @endforeach
                 
                
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->


@endsection
