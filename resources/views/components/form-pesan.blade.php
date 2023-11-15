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
                <input type="number" class="form-control rounded" maxlength="3" name="jumlah_kamar">
            </div>
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-block btn-info" id="bt-form">Pesan</button>
        </div>
    </form>


    <!-- form 2 -->
   <form method="post" action="{{ route('pesan.store') }}" enctype="multipart/form-data" id="form1" style="display: none;">
        <div class="card col-12">
            <div class="card-body">
        <h3>
            <i class="fas fa-pen"></i></fa-pen-to-square> Form Pemesanan
        </h3>
        
        <div class="form-group">
          <div class="card col-12">
            <div class="card-body">
                <!-- hidden -->
                <input type="hidden" name="check_in_hidden" id="check_in_hidden">
                <input type="hidden" name="check_out_hidden" id="check_out_hidden">
                <input type="hidden" name="jumlah_kamar_hidden" id="jumlah_kamar_hidden">
                 <!-- end -->

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
        <button type="submit" class="btn btn-success btn-block">Konfirmasi Pesanan</button>
        </div>
        </div>
        </div>
        </div>
        </div>
    </form>

    @push('js1')
        <!-- show form -->
        <script>
            $(document).ready(function () {
                $("#bt-form").click(function(){
                    $("#form1").toggle();
                    // document.getElementById("#form1").style.display="block";
                });

                // Fungsi untuk menyalin nilai dari input date ke input hidden
                // $('input[type="date"]').change(function() {
                //     var dateValue = $(this).val();
                //     $('#check_in_hidden').val(dateValue);
                //     $('#check_out_hidden').val(dateValue);
                // });

                // $('input[type="number"]').change(function() {
                //     var jumlah = $(this).val();
                //     $('#jumlah_kamar_hidden').val(jumlah);
                // });

            //     $('input[type="date"]').change(function() {
            //     var dateValue = $(this).val();
            //     if ($(this).attr('name') === 'check_in') {
            //         $('#check_in_hidden').val(dateValue);
            //     } else if ($(this).attr('name') === 'check_out') {
            //         $('#check_out_hidden').val(dateValue);
            //     }
            // });

            // // jQuery script to copy number value to hidden input
            //     $('input[type="number"]').change(function() {
            //         var jumlah = $(this).val();
            //         $('#jumlah_kamar_hidden').val(jumlah);
            //     });

        //     $('input[type="date"]').change(function() {
        //     console.log('Date input changed');
        //     var dateValue = $(this).val();
        //     console.log('Date value:', dateValue);
        //     if ($(this).attr('name') === 'check_in') {
        //         console.log('Setting check_in_hidden value:', dateValue);
        //         $('#check_in_hidden').val(dateValue);
        //     } else if ($(this).attr('name') === 'check_out') {
        //         console.log('Setting check_out_hidden value:', dateValue);
        //         $('#check_out_hidden').val(dateValue);
        //     }
        // });

        // $('input[type="number"]').change(function() {
        //     console.log('Number input changed');
        //     var jumlah = $(this).val();
        //     console.log('Number value:', jumlah);
        //     $('#jumlah_kamar_hidden').val(jumlah);
        // });

            });

            $(document).on('change', 'input[type="date"]', function() {
                // Your date change handling code
                var dateValue = $(this).val();
                if ($(this).attr('name') === 'check_in') {
                    $('#check_in_hidden').val(dateValue);
                } else if ($(this).attr('name') === 'check_out') {
                    $('#check_out_hidden').val(dateValue);
                }
            });

            $(document).on('change', 'input[type="number"]', function() {
                // Your number change handling code
                var jumlah = $(this).val();
                $('#jumlah_kamar_hidden').val(jumlah);
            });

        </script>
    @endpush
