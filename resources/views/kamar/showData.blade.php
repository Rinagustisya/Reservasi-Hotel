@extends('layouts.admin', ['title'=>'Show Data'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-desktop"></i>Halaman Monitoring</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-show :action="route('moni.update',['pesan'=>$row->id])">
               <x-input-user label="Nama User" name="nama_user" :value="$row->nama_user"/>
               <x-input-user label="Tanggal Check-in" name="check_in" :value="$row->check_in" type="date" />
               <x-input-user label="Tanggal Check-out" name="check_out" :value="$row->check_out" type="date" />
               <x-input-user label="Jenis Kamar" name="jenis_kamar" :value="$row->jenis_kamar"/>
               <x-input-user label="Jumlah Kamar yang dipesan" name="jumlah_kamar" :value="$row->jumlah_kamar" type="number" />
               <x-input-user label="Foto User" name="foto_user" :value="$row->foto_user" type="file" keterangan="Upload tanda pengenal anda. Contoh : ktp" />
           </x-form-show>
    </div>
</div>
@endsection