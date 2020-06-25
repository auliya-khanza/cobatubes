@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')

<section class="bg-light page-section" id="portfolio">
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
  </section>
                    </div>
                </section>

@endsection