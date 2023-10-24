@extends('layouts.admin', ['title'=>'Tambah Admin'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
           <x-form-create :action="route('admin.create')">
               <x-input-admin label="Nama Lengkap" name="nama" />
               <x-input-admin label="Username" name="username" />
               <x-input-admin label="Password" name="password" type="password" />
               <x-input-admin label="Konfirmasi Password" name="password_confir" type="password" />
           </x-form-create>
    </div>
</div>
@endsection