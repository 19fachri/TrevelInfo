<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PaketLokasi;

class PaketLokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $data = new PaketLokasi;
        $data->idPaket = $request->idPaket;
        $data->idLokasi = $request->idLokasi;
        $data->hari = $request->hari;
        $data->jam = $request->jam;
        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('paketlokasi')->where('idPaket','=', $id)->orderBy('hari')->orderBy('jam')
            ->leftJoin('lokasi', 'paketlokasi.idLokasi', '=', 'lokasi.id')
            ->get();
        return $data;
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
        $data = PaketLokasi::where('idPaket',$request->idPaket)->where('idLokasi',$request->idLokasi);
        $data->hari = $request->hari;
        $data->jam = $request->jam;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PaketLokasi::destroy($id);
    }

    public function listLokasi($id)
    {
        $data = DB::table('paketlokasi')->where('idPaket','=', $id)
            ->leftJoin('lokasi', 'paketlokasi.idLokasi', '=', 'lokasi.id')
            ->get();
        return $data;
    }
}
