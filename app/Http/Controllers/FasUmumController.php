<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUmum;
use Illuminate\Http\Request;

class FasUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $data = FasilitasUmum::select('id', 'tipe_kamar', 'nama_fas')
                ->when($search, function($query, $search){
                    return $query->where('tipe_kamar', 'like', "%{$search}%");
                })
                ->paginate(5);
        return view('fasilitas_umum.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas_umum.create');
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
            'tipe_kamar' => 'required',
            'nama_fas' => 'required',
        ]);

        FasilitasUmum::create([
            'tipe_kamar' => $request->tipe_kamar,
            'nama_fas' => $request->nama_fas
        ]);

        return redirect()->route('fasUmum.index')->with('status', 'store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $fasUid)
    {
        $fasu = FasilitasUmum::find($fasUid);

    if ($fasu) {
        return view('fasilitas_umum.edit', ['row' => $fasu]);
    } else {
        return redirect()->route('fasUmum.index')->with('error', 'Fasilitas not found');
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fasUid)
    {
        $fas = FasilitasUmum::find($fasUid);
    
        if (!$fas) {
            return redirect()->route('fasilitas.index')->with('error', 'Fasilitas not found');
        }
    
        $request->validate([
            'tipe_kamar' => 'required',
            'nama_fas' => 'required',
        ]);
    
        // Update data
        $fas->update([
            'tipe_kamar' => $request->tipe_kamar,
            'nama_fas' => $request->nama_fas
        ]);
    
    
        return redirect()->route('fasUmum.index')->with('status', 'update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $fasUid)
    {
        $fas = FasilitasUmum::find($fasUid);

        $fas->delete();
        return back()->with('status', 'destroy');
    }
}
