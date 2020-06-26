@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')

<section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Merchandise</h2>
                    </div>
                </div>
            </div>
            @foreach($merchandise as $m)
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item">
                     
                        <div class="ti-text">
                            <h5>{{ $m->nama}}</h5>
                            <span>{{ $m->deskripsi }}</span>
                            <div class="button">
                            <a href="/merchandise/lihat_merchan/{id}" class="btn btn-info" role="button" title="Lihat Data"><i class="glyphicon glyphicon-plus"></i>Lihat Informasi</a>
                            <a href="" class="btn btn-info" role="button" title="Beli"><i class="glyphicon glyphicon-plus"></i>Beli tiket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

@endsection