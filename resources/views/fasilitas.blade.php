@extends('layouts.tamu', ['title'=>'fasilitas'])

@section('content')

<x-form-pesan />
<h1 class="text-center my-4">Fasilitas</h1>
    
    <div class="row fasilitas">
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Gratis Sarapan Pagi
                </div>
                <div class="card-body p-1">
                    <img src="images/sarapan.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Kolam Renang
                </div>
                <div class="card-body p-1">
                    <img src="images/kolam_renang.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Restaurant
                </div>
                <div class="card-body p-1">
                    <img src="images/restoran.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Pelayanan 24 Jam
                </div>
                <div class="card-body p-1">
                    <img src="images/resepsionis.jpg" class="img-fluid rounded" />
                </div>
            </a>
        </div>
    </div>

    <h1 class="text-center my-4">Kamar</h1>

    <div class="row kamar">
        <div class="col-md-4">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Standart Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_standar.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 300.000
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Suite Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_suite.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 400.000
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="card card-light" href="#">
                <div class="card-header">
                    Deluxe Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_deluxe.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 700.000
                </div>
            </a>
        </div>
@endsection