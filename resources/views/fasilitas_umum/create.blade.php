@extends('layouts.admin',['title'=>'Tambah Fasilitas Umum'])

@section('content-header')
<h1 class="m-0"><i class="far fa-building"></i>Fasilitas Umum</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-create :action="route('fasUmum.store')" :upload="true">
               <x-input-admin label="Tipe Kamar" name="tipe_kamar" />
               <x-input-admin label="Nama Fasilitas" name="nama_fas" />
            </x-form-create>
    </div>
</div>
@endsection