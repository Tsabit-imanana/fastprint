<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $produks = produk::all();
    return view('daftarproduk', compact('produks'));
    }

    public function status($status)
    {
    if($status == "bisadijual"){
        $nstatus = "bisa dijual";
    }else {
        $nstatus = "tidak bisa dijual";
    }
    $produks = produk::where('status',$nstatus)->get();
    return view('daftarproduk', compact('produks'));
    }


    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('tambahproduk');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprodukRequest $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|integer',
            'kategori' => 'required',
            'status' => 'required'
        ]);

        produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'status' => $request->status,
        ]);

        $produks = produk::all();
        return view('daftarproduk', compact('produks'));

    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_produk)
    {
        $data = produk::find($id_produk);
        return view('editproduk',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id_produk,Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|integer',
            'kategori' => 'required',
            'status' => 'required'
        ]);

        produk::where('id_produk',$id_produk)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'status' => $request->status,
        ]);

        $produks = produk::all();
        return view('daftarproduk', compact('produks'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_produk)
    {
        $data = produk::find($id_produk);
        return view('hapusproduk',['data'=>$data]);
    }
    public function destroy($id_produk)
    {
        produk::where('id_produk',$id_produk)->delete();

        $produks = produk::all();
        return view('daftarproduk', compact('produks'));
    }
}
