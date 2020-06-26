@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')
<div class="jumbotron jumbotron-fluid">
			
@foreach($merchandise as $m)
			<div class="container">
				<h1 class="display-4">{{ $m->nama }}</h1>
			</div>
			</div>
	
			<div class="container">
                <br><br>

                <h4>Deskripsi</h4>
                <p>{{ $m->deskripsi }}</p>
                <br>

                <h4>Harga</h4>
                <p>{{ $m->harga}}</p>
                <br>

                <h4>Stok</h4>
                <p>{{ $m->stok }}</p>
                <br>



            </div>
            @endforeach

			<a href="/user/merchandise"> Kembali </a>
@endsection