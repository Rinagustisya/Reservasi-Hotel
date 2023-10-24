@props(['action'])
<form action="{{ $action }}" method="post" class="card card-primary">
    <div class="card-header">
        <i class="fas fa-plus-circle"></i> Tambah
    </div>
    <div class="card-body">
        <?= $slot ?>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit">
           <i class="fas fa-database"></i> Simpan
        </button>
    </div>
</form>