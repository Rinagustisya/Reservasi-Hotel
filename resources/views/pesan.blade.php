@extends('layouts.tamu', ['title'=>'Home'])

@section('content')
<x-status/>
<x-form-pesan />
<br>
<form method="post" action="{{ route('pesan.create') }}" enctype="multipart/form-data">
    <div class="container d-flex justify-content-center">
        <div class="card col-8">
            <div class="card-body">
        <h3>
            <i class="fas fa-pen"></i></fa-pen-to-square> Form Pemesanan
        </h3>
        <div class="form-group">
          <div class="card col-12">
            <div class="card-body">
              <label>Nama Pemesan</label>
                  <div class="form-group">
                  <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan nama pesan..." />
                  @if ($errors->has('nama_user'))
                  <span class="text-danger text-left">{{ $errors->first('nama_user') }}</span>
                  @endif
                  </div>
                  <!-- input2 -->
              <label>Email</label>
                  <div class="form-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email anda..." />
                  @if ($errors->has('email'))
                  <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                  @endif
                  </div>
        <!-- input 3-->
              <label>No. Headphone</label>
                  <div class="form-group">
                  <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan nomor anda..." />
                  @if ($errors->has('no_hp'))
                  <span class="text-danger text-left">{{ $errors->first('no_hp') }}</span>
                  @endif
                  </div>
        <!-- input 3 -->
              <label>Nama Tamu</label>
                  <div class="form-group">
                  <input type="text" class="form-control" id="nama_tamu" name="nama_tamu"  placeholder="Masukan nama anda..." />
                  @if ($errors->has('nama_tamu'))
                  <span class="text-danger text-left">{{ $errors->first('nama_tamu') }}</span>
                  @endif
                  </div>
        <!-- input 4 -->
            <div class="form-group">
              <label>Tipe Kamar</label>
                  <select name="jenis_kamar" id="jenis_kamar">
                      <option value="Standar Room">Standar Room</option>
                      <option value="Suite Room">Suite Room</option>
                      <option value="Honey Moon Room">Honey Moon Room</option>
                      <option value="Premium Room">Premium Room</option>
                      <option value="Deluxe Room">Deluxe Room</option>
                  </select>
                  @if ($errors->has('jenis_kamar'))
                  <span class="text-danger text-left">{{ $errors->first('jenis_kamar') }}</span>
                  @endif
                  </div>
        <!-- input 5 -->
              <label>Data Diri</label>
                  <div class="form-group">
                  <input type="file" class="form-control" id="foto_user" name="foto_user"/>
                  <div class="text-muted">
                      <small>
                          Upload tanda pengenal anda. Contoh : ktp
                      </small>
                  </div>
                  @if ($errors->has('foto_user'))
                  <span class="text-danger text-left">{{ $errors->first('foto_user') }}</span>
                  @endif
                  </div>
        <!-- end input -->
        
        <!-- footer -->
      </div class="col-12">
        <div class="row">
            <div class="col-6">
            <a href="{{ route('home')}}"><button type="button" class="btn btn-light btn-block">Kembali</button></a>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success  btn-block">Konfirmasi Pesanan</button>
            </div>
      </div>
      </div>
            
        </div>
        </div>
        </div>
    </div>
    </form>
@endsection

