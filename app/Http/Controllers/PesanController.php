<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
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
            'nama_tamu' => 'required|min:3',
            'nama_pemesan' => 'required|min:3',
            'email' => 'required',
            'no_hp' => 'required|min:4',
            'check_in' => 'required',
            'check_out' => 'required',
            'jenis_kamar' => 'required',
            'foto_user' => 'required|image|mimes:png,jpg,jpeg',
            'jumlah_kamar' => 'required'
        ]);

       //upload image
       $image = $request->file('foto_user');
       $image->storeAs('public/data_diri', $image->hashName());

        Pesan::create([
            'nama_tamu' => $request->nama_tamu,
            'nama_pemesan' => $request->nama_pemesan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'jenis_kamar' => $request->jenis_kamar,
            'foto_user' => $image->hashName(),
            'jumlah_kamar' => $request->jumlah_kamar
        ]);

        Alert::success('Berhasil!', 'Permintaan Anda Telah Terkirim!');
        return redirect()->route('home');
    }

    public function storeAtas(Request $request)
    {
        $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
            'jumlah_kamar' => 'required'
        ]);

        Pesan::create([
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'jumlah_kamar' => $request->jumlah_kamar
        ]);
        return redirect()->route('pesan');
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
