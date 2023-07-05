@extends('layouts.master')
@section('title')
    Data Taruna
@endsection
@section('pagetitle-1')
    Home
@endsection
@section('konten')
<div class="row m-3">
    <div class="col-xl-10 col-sm-12 my-4">
        <div class="card border border-primary">
            <div class="card-header position-relative d-flex justify-content-between my-auto bg-primary">
                <p class="mb-0 text-light">Data Mahasiswa Tahunan</p>      
            </div>
            <div class="card-body"><canvas id="taruna_by_provinsi" width="100%" height="60"></canvas></div>   
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 my-4">
        <div class="card border border-primary">
            <div class="card-header position-relative d-flex justify-content-between my-auto bg-primary text-light">
                Daftar Taruna berdasarkan kelamin
                <i class="fas fa-chart-bar me-1"></i>
            </div>
            <div class="card-body ">
                <canvas id="taruna_by_gender" width="100%" height="60"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 my-4">
        <div class="card border border-primary">
            <div class="card-header position-relative d-flex justify-content-between my-auto bg-primary text-light">
                Bar Chart Example
                <i class="fas fa-calendar me-1"></i>
            </div>
            <div class="card-body">
                <canvas id="catar_pendaftar_perbulan" width="100%" height="60"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 my-4">
        <div class="card border border-primary">
            <div class="card-header position-relative d-flex justify-content-between my-auto bg-primary text-light">
                Bar Chart Example
                <i class="fas fa-calendar me-1"></i>
            </div>
            <div class="card-body">
                <canvas id="catar_hereg_perbulan" width="100%" height="60"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
