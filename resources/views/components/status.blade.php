@if ( session('status') == 'store')
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> User Baru Telah di tambahkan
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif