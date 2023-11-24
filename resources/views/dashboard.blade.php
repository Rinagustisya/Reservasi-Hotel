@extends('layouts.admin', ['title'=>'Dashboard'])

@section('content-header')
<h1 class="mb-0">Dashboard</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Selamat Datang di Aplikasi Reservasi Hotel &nbsp; {{ Auth::user()->nama }}</h3>
    </div>
</div>
@endsection