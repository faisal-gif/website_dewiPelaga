@extends('layouts.wel')

@section('content')

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
                        @if($p->fotoPosting == null)
                                <img src="{{ asset('default.png')}}" alt="" width="200">
                                @else
                                <img src="{{$p->fotoPosting}}" alt="" width="200">
                                @endif
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


@endsection
