@extends('layouts.wel')

@section('content')

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
@endsection
