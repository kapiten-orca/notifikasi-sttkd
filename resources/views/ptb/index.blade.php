@extends('layouts.index')
@section('title')
    Home
@endsection

@section('konten')
<div class="pagetitle">
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/index">Home</a></li>
          <li class="breadcrumb-item"><a href="/ptb">PTB</a></li>
      </ol>
  </nav>
</div>

<div class="d-inline-flex p-2 justify-content-evenly">
    <div class="card  mb-3 border border border-primary mx-5" >
      <div class="card-header text-bg-primary d-flex justify-content-between">
        Pendaftaran Taruna
        <a href="/ptb" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div> 
    <div class="card  mb-3 border border border-warning mx-5" >
      <div class="card-header text-bg-warning text-light d-flex justify-content-between">
        Uang Pendaftaran Taruna
        <a href="/akademik" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div> 
    <div class="card  mb-3 border border border-danger mx-5" >
      <div class="card-header text-bg-danger d-flex justify-content-between">
        Pembayaran Heregistrasi
        <a href="{{url('/ptb/hreg')}}" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
      </div>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div> 
    <div class="card  mb-3 border border border-success  mx-5" >
        <div class="card-header text-bg-success  d-flex justify-content-between">
          Data Taruna
          <a href="/ptb/taruna" class="btn-sm text-decoration-none text-light"><i class="fas fa-angle-right"></i></a>
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div> 
</div>

<div class="container ">
  <div class="row mx-3">
    <div class="col-xl-6">
        <div class="card my-4">
            <div class="card-body border border-primary"><canvas id="tarunaBayarUangDaftarTahun" width="100%" height="60"></canvas></div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card my-4">
          <div class="card-body border border-primary"><canvas id="tarunaBayarUangDaftarTahun" width="100%" height="60"></canvas></div>
      </div>
      </div>
    
</div>

@endsection
