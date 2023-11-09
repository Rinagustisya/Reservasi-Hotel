@props(['action','header-route'=>true, 'upload'=>false])
<form action="{{ $action }}" method="post" class="card card-primary"<?= $upload ? ' enctype="multipart/form-data"' : '' ?>>
<div class="card-body">
    @method('put')
    <?= $slot ?>
</div>

<div class="card-footer text-right">
<div class="col-12">
        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-danger btn-block" id="Rejected" name="status_persetujuan" value="Rejected" onclick="return confirm ('Are you sure to reject this?')">Reject</button>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success btn-block" id="Approved" name="status_persetujuan" value="Approved" onclick="return confirm ('Are you sure to approve this?')">Approved</button>
            </div>
        </div>
    </div>
</div>
</form>