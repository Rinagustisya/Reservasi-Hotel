<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $data = Fasilitas::select('id', 'nama', 'keterangan', 'foto')
                ->when($search, function($query, $search){
                    return $query->where('nama', 'like', "%{$search}%");
                })
                ->paginate(5);
        return view('fasilitas_kamar.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas_kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg'
        ]);

       //upload image
       $image = $request->file('foto');
       $image->storeAs('public/fasilitas', $image->hashName());

        Fasilitas::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'foto' => $image->hashName()
        ]);

        return redirect()->route('fasilitas.index')->with('status', 'store');
    }

    public function show1($filename1)
    {
        $path = 'public/fasilitas/' . $filename1;
        $filePath = storage_path('app/' . $path);

        if (Storage::exists($path)) {
            $fileContents = file_get_contents($filePath);
            return response($fileContents)->header('Content-Type', 'image/jpeg');
        }

        abort(404);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $fasId)
{
    $fas = Fasilitas::find($fasId);

    if ($fas) {
        return view('fasilitas_kamar.edit', ['row' => $fas]);
    } else {
        return redirect()->route('fasilitas.index')->with('error', 'Fasilitas not found');
    }
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData(Request $request)
    {
        $queryId = $request->query('fasilitas');
        $fas= Fasilitas::find($queryId);

        if (!$fas) {
            return abort(404);
        }
    
        return view('fasilitas_kamar.edit', ['row'=>$fas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fasId)
{
    $fas = Fasilitas::find($fasId);

    if (!$fas) {
        return redirect()->route('fasilitas.index')->with('error', 'Fasilitas not found');
    }

    $request->validate([
        'nama' => 'required',
        'keterangan' => 'required',
        'foto' => 'image|mimes:png,jpg,jpeg'
    ]);

    // Update data
    $fas->nama = $request->nama;
    $fas->keterangan = $request->keterangan;

    // Update foto if available
    if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $image->storeAs('public/fasilitas', $image->hashName());
        $fas->foto = $image->hashName();
    }

    $fas->save();

    return redirect()->route('fasilitas.index')->with('status', 'update');
}

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $fasId)
    {
        $fas = Fasilitas::find($fasId);

        if ($fas->foto) {
            $file = 'public/fas$fas/' . $fas->foto;
            
            if (Storage::exists($file)) {
                Storage::delete($file);
            }
        }
        // Hapus fasilitas dari database
        $fas->delete();

        return back()->with('status', 'destroy');
    }
}
