<div class="container">
    <div class="card">
        <div class="card-body">
<!-- button -->
<button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#pesan">Pesan Sekarang!</button>

<div class="modal fade" id="pesan" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="modal-content" method="post" action="{{ route('pesan.create') }}" enctype="multipart/form-data">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">
            <i class="fas fa-pen"></i></fa-pen-to-square> Form User
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- modal body -->
      <div class="modal-body">
        <!-- input user -->
        <!-- input 2 -->
        <div class="form-group row">
          <div class="card col-12">
            <div class="card-body">
              <label>Nama</label>
                  <div class="form-group">
                  <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan nama anda..." />
                  @if ($errors->has('nama_user'))
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
                  <input type='date' class="form-control" id="check_in" name="check_in" />
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
                  <input type='date' class="form-control" id="check_out" name="check_out" />
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
                  <select name="jenis_kamar" class="aku-cinta-gisel" id="jenis_kamar">
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
          </div>
        </div>
        <!-- end input -->
        <!-- input 2 -->
        <div class="form-group row">
          <div class="card col-12">
            <div class="card-body">
              <label>Jumlah Kamar</label>
                  <div class="form-group">
                  <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar"/>
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
              </div>
          </div>
        </div>
        <!-- end input -->
        
        <!-- footer -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Kirim</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>

<!-- modal -->
@push('js1')
<script>
$(function name(params) {
    $('#pesan').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-content')
        modal.find('.modal-body input').val(recipient)
        });

        $(document).ready(function() {
          $('.aku-cinta-gisel').select2();
          });
    });
</script>
@endpush   