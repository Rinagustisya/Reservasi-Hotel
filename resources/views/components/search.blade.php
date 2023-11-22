<form action="?" method="get" class="form-inline">
    <div class="input-group ml-auto">
        <input type="text" class="form-control" placeholder="Cari..." name="search" value="<?php request()->search ?>">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit">Go!</button>
            </div>
    </div>
</form>

<form action="?" method="get" class="form-inline">
    <div class="input-group ml-auto">
        <input type="date" class="form-control" name="check_in" value="<?php request()->check_in ?>">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit">Go!</button>
            </div>
    </div>
</form>