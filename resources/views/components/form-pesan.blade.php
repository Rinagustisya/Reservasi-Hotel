<form method="get" action="?" class="row bg-white py-4 px-2 form-pesan border shadow">
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
          <a href="{{ route('pesan')}}"><button type="button" class="btn btn-block btn-info">Pesan</button> </a>
        </div>
    </form>
 