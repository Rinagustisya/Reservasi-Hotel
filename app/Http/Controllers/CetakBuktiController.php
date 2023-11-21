<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Pesan;
use RealRashid\SweetAlert\Facades\Alert;
class CetakBuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print(Request $request)
    {
        $data = Pesan::select('id', 'nama_tamu', 'nama_pemesan', 'check_in',  'check_out', 'jenis_kamar', 'foto_user' , 'jumlah_kamar', 'status')->get();
        $invoiceData = [
            'invoice_id' =>  $data->first()->id,
            'transaction_id' => uniqid(),
            'payment_method' => 'BCA M-Banking',
            'creation_date' => date('M d, Y'),
        ];
        $pdf = PDF::loadView('cetak', compact('data','invoiceData'))
                ->setOption('fontDir', public_path('/fonts'));
        return $pdf->download('cetak.pdf');
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
