@extends('layouts.admin',['title'=>'Tambah Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-create :action="route('kamar.store')" :upload="true">
               <x-input-admin label="Nama" name="nama_kamar" />
               <x-input-admin label="Jumlah Kamar tersedia" name="jum_kamar" type="number"/>
               <x-input-admin label="Harga per Malam" name="harga_kamar" type="number"/>
               <x-textArea label="Deskripsi" name="deskripsi_kamar"/>
               <div class="akucinta">
               <x-input-admin label="Foto" name="foto_kamar" type="file" keterangan="Foto bertipe : png, jpg, jpeg"/>   
                </div> 
            </x-form-create>
    </div>
</div>
@endsection