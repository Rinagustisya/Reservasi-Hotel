@extends('layouts.admin',['title'=>'Edit Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-edit :action="route('kamar.update',['kamar'=>$row->id])" :upload="true">
               <x-input-admin label="Nama" name="nama_kamar" :value="$row->nama_kamar" />
               <x-input-admin label="Jumlah Kamar tersedia" name="jum_kamar" type="number" :value="$row->jum_kamar"/>
               <x-input-admin label="Harga per Malam" name="harga_kamar" type="number" :value="$row->harga_kamar"/>
               <x-textArea label="Deskripsi" name="deskripsi_kamar" :value="$row->deskripsi_kamar"/>
               <div class="container">
                <div class="akucinta">
                    <x-input-admin label="Foto" name="foto_kamar" type="file" keterangan="Foto bertipe : png, jpg, jpeg" :value="$row->foto_kamar" />
                        @if ($row->foto_kamar)
                            <img src="{{ url('images/kamar/'.$row->foto_kamar) }}" class="img-fluid" >
                        @endif
                    </div>
               </div>
            </x-form-edit>
    </div>
</div>
@endsection