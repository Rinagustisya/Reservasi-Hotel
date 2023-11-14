<form method="post" class="row bg-white py-4 px-2 form-pesan border shadow">
        <div class="col-md">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-0">Check In</span>
                </div>
                <input type="date" class="form-control rounded" placeholder="Check In" name="check_in">
            </div>
        </div>
        <div class="col-md">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-0">Check Out</span>
                </div>
                <input type="date" class="form-control rounded" placeholder="Check Out" name="check_out">
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-0">Jumlah Kamar</span>
                </div>
                <input type="text" class="form-control rounded" maxlength="3" name="jum_kamar">
            </div>
        </div>
        <div class="col-md-1">
          <button type="button" onclick="showForm()" class="btn btn-block btn-info">Pesan</button>
        </div>
    </form>


    <!-- form 2 -->
    <div id="form_container">
  <div id="form_sub_container1" style="display: block;">
   <form method="post" action="{{ route('pesan.store') }}" enctype="multipart/form-data" >
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
                  <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" placeholder="Masukan nama pesan..." />
                  @if ($errors->has('nama_pemesan'))
                  <span class="text-danger text-left">{{ $errors->first('nama_pemesan') }}</span>
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
</div>
</div>


    @push('js1')
   <script>
    function showForm() {
      var form = document.getElementById('myForm');
      form.style.display = 'block';
    }
   </script>
   @endpush 