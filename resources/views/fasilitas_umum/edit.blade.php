@extends('layouts.admin',['title'=>'Edit Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-edit :action="route('fasu.update',['fasUid'=>$row->id])">
               <x-input-admin label="Tipe Kamar" name="tipe_kamar" :value="$row->tipe_kamar" />
               <x-input-admin label="Nama Fasilitas" name="nama_fas" :value="$row->nama_fas"/>
            </x-form-edit>
    </div>
</div>
@endsection