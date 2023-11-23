@extends('layouts.admin',['title'=>'Edit Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-edit :action="route('fas.update',['fas'=>$row->id])" :upload="true">
               <x-input-admin label="Nama" name="nama" :value="$row->nama" readonly />
               <x-input-admin label="Keterangan" name="keterangan" :value="$row->keterangan" readonly/>
                <div class="container">
                <div class="akucinta">
                    <input type="hidden" name="foto_user" value="{{ $row->foto }}">
                  <img src="{{ route('show.foto', ['filename1' => basename($row->foto)]) }}" alt="data diri" class="img-fluid">
               </div>
               </div>
            </x-form-edit>
    </div>
</div>
@endsection