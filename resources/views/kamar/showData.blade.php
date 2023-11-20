@extends('layouts.admin', ['title'=>'Show Data'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-desktop"></i>Halaman Monitoring</h1>
@endsection

@section('content')
<form method="post" action="{{ route('moni.update',['pesan'=>$row->id]) }}" enctype="multipart/form-data">
    @method('put')
    <div class="container">
        <div class="card">
        <div class="card-body">
            <div class="form-group">
    <div class="form-group row">
          <div class="card col-12">
            <div class="card-body">
              <label>Nama</label>
                  <div class="form-group">
                  <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan nama anda..."  value="{{ $row->nama_pemesan }}" readonly/>
                  @if ($errors->has('nama_pemesan'))
                  <span class="text-danger text-left">{{ $errors->first('nama_user') }}</span>
                  @endif
                  </div>
              </div>
          </div>
        </div>
        <!-- end input -->
        <div class="form-group row">
          <div class="card col-6">
            <div class="card-body">
              <!-- input 1 -->
                <label>Check In</label>
                  <div class="form-group">
                  <input type='date' class="form-control" id="check_in" name="check_in" value="{{ $row->check_in }}" readonly/>
                  @if ($errors->has('check_in'))
                  <span class="text-danger text-left">{{ $errors->first('check_in') }}</span>
                  @endif
                  </div>
              <!-- end input -->
          </div>
        </div>
        <!-- input 2 -->
          <div class="card col-6">
            <div class="card-body">
              <label>Check Out</label>
                  <div class="form-group">
                  <input type='date' class="form-control" id="check_out" name="check_out" value="{{ $row->check_out }}" readonly/>
                  @if ($errors->has('check_out'))
                  <span class="text-danger text-left">{{ $errors->first('check_out') }}</span>
                  @endif
                  </div>
              </div>
        </div>
        </div>
        <!-- end input -->
        <!-- input 2 -->
        <div class="form-group row">
          <div class="card col-12">
            <div class="card-body">
              <label>Jenis Kamar</label>
                  <input type="text"  class="form-control" id="jenis_kamar" name="jenis_kamar" value="{{ $row->jenis_kamar }}" readonly>
              </div>
          </div>
        </div>
        <!-- end input -->
        <!-- input 2 -->
        <div class="form-group row">
          <div class="card col-12">
            <div class="card-body">
              <label>Jumlah Kamar</label>
                  <div class="form-group">
                  <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" value="{{ $row->jumlah_kamar }}" readonly/>
                  @if ($errors->has('jumlah_kamar'))
                  <span class="text-danger text-left">{{ $errors->first('jumlah_kamar') }}</span>
                  @endif
                  </div>
              </div>
          </div>
        </div>
        <!-- end input -->
        <!-- input 2 -->
        <div class="form-group row">
          <div class="card col-12">
            <div class="card-body">
              <label>Data Diri</label>
                  <div class="form-group">
                  <input type="hidden" name="foto_user" value="{{ $row->foto_user }}">
                  <img src="{{ route('show.image', ['filename' => basename($row->foto_user)]) }}" alt="data diri" class="img-fluid">
                  @if ($errors->has('foto_user'))
                  <span class="text-danger text-left">{{ $errors->first('foto_user') }}</span>
                  @endif
                  </div>
              </div>
          </div>
        </div>
        <!-- end input -->
                        
        </div>
        </div>  
    </div>
    </div>
</form>
@endsection