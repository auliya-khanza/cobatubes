@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')

<section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Obyek Wisata di Yogyakarta</h2>
                    </div>
                </div>
            </div>
            @foreach($objek as $p)
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item">
                        <img src="{{url('/data_file/'.$p->image)}}" alt="" width="250px" height="250px">
                        <div class="ti-text">
                            <h5>{{ $p->nama_objek }}</h5>
                            <span>{{ $p->Alamat }}</span>
                            <div class="button">
                            <a href="/user/objek_wisata/lihat/{{ $p->id_objek }}" class="btn btn-info" role="button" title="Lihat Data"><i class="glyphicon glyphicon-plus"></i>Lihat Informasi</a>
                            <a href="/user/objek_wisata/beli/{{ $p->id_objek }}" class="btn btn-info" role="button" title="Beli tiket"><i class="glyphicon glyphicon-plus"></i>Beli tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

<!-- <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <br>
      <br>
      <div class="row">
        @foreach($objek as $p)
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{url('/data_file/'.$p->image)}}">
          </a>
          <div class="portfolio-caption">
            
            <h4>{{ $p->nama_objek }}</h4>
            <p class="text-muted">{{ $p->Alamat }}</p>
            <a href="/user/objek_wisata/lihat/{{ $p->id_objek }}" class="btn btn-info" role="button" title="Lihat Data"><i class="glyphicon glyphicon-plus"></i>Lihat Informasi</a>
            <br>
          </div>
         
        </div>
           @endforeach

    </div>
  </section> -->
  <!-- </div>
</section> -->

@endsection