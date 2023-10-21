<form action="?" method="get" class="form-inline">
    <div class="input-group ml-auto">
        <input type="text" class="form-control" placeholder="Cari..." name="search" value="<?php request()->search ?>">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit">Go!</button>
            </div>
    </div>
</form>