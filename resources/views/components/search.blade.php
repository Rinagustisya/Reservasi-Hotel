<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="?" method="get">
                <div class="input-group">
                    <input type="date" class="form-control" name="check_in" value="<?php request()->check_in ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-calendar"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <!-- ini adalah ghaib -->
        </div>
        <div class="col-4">
            <form action="?" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." name="search" value="<?php request()->search ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
