@extends('layouts.admin', ['title'=>'Dashboard'])

@section('content-header')
<h1 class="mb-0">Dashboard</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="color: green"><strong>Selamat Datang &nbsp; {{ Auth::user()->nama }} !!</strong></h3>
    </div>
</div>
@endsection