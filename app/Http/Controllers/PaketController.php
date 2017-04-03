<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Paket::orderBy('id','desc')->take(10)->get();
        return $data;
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
        $data = new Paket;
        $data->nama = $request->nama;
        $data->harga = $request->input('harga');
        $data->jumlah = $request->input('jumlah');
        $data->info = $request->input('info');
        $data->save();
        $id = Paket::orderBy('id','desc')->first();
        return $id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket = Paket::find($id);
        $data = new PaketLokasiController;
        $lokasi = $data->listLokasi($id);
        return $lokasi;
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
        
        $data = Paket::find($id);
        $data->nama = $request->nama;
        $data->harga = $request->input('harga');
        $data->jumlah = $request->input('jumlah');
        $data->info = $request->input('info');
        $data->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::destroy($id);
        return 'success';
    }
}
