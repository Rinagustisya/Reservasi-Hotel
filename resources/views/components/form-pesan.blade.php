<div class="container">
    <div class="card">
        <div class="card-body">
<!-- button -->
<button type="button" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#pesan" data-whatever="@mdo">Pesan Sekarang!</button>

<div class="modal fade" id="pesan" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="modal-content" method="post">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">
            <i class="fas fa-pen"></i></fa-pen-to-square> Silahkan isi Form Terlebih Dahulu
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- modal body -->
      <div class="modal-body">
        Apakah Anda Yakin ingin dihapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
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
        modal.find('.modal-content').attr('action', recipient)
        modal.find('.modal-body input').val(recipient)
        });
    });
</script>
@endpush   