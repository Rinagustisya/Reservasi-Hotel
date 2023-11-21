@extends('layouts.admin',['title'=>'Tambah Fasilitas Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-building"></i>Fasilitas Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-create :action="route('fasilitas.store')" :upload="true">
               <x-input-admin label="Nama Fasilitas" name="nama" />
               <x-input-admin label="Keterangan" name="keterangan" />
               <div class="akucinta">
               <x-input-admin label="Foto" name="foto" type="file" keterangan="Foto bertipe : png, jpg, jpeg"/>   
                </div> 
            </x-form-create>
    </div>
</div>
@endsection