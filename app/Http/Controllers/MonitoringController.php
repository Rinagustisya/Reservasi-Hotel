<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Storage;
class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $checkInDate = $request->check_in; 
        $data = Pesan::select('id', 'nama_tamu', 'nama_pemesan', 'check_in',  'check_out', 'jenis_kamar', 'foto_user' , 'jumlah_kamar', 'status')
                ->when($search, function($query, $search){
                    return $query->where('nama_tamu', 'like', "%{$search}%")
                            ->orWhere('status', 'like', "%{$search}%");
                })
                ->when($checkInDate, function ($query, $checkInDate) {
                    // Tambahkan kondisi where untuk tanggal check-in
                    return $query->whereDate('check_in', '=', $checkInDate);
                })
                ->paginate(5);
        return view('kamar.moni', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $queryId = $request->query('pesan');
        $pesan = Pesan::find($queryId);
        return view('kamar.showData', ['row'=>$pesan]);
    }


    public function show1($filename)
    {
        $path = 'public/data_diri/' . $filename;
        $filePath = storage_path('app/' . $path);

        if (Storage::exists($path)) {
            $fileContents = file_get_contents($filePath);
            return response($fileContents)->header('Content-Type', 'image/jpeg');
        }

        abort(404);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
