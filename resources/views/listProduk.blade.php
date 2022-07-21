@extends('layouts.wel')

@section('content')

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


@endsection
