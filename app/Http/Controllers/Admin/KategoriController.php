<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //API

    public static function getAllDataKategori(){
        $data = Kategori::all();
        return response([
            'message' => "Succes Get Data",
            'data' => $data
        ], 200);
    }

    public static function getDataKategoriByName($name = ""){
        // return $name;
        $data = Kategori::where('nama', 'LIKE', '%'.$name.'%')->get();
        return response([
            'message' => "Succes Get Data",
            'data' => $data
        ], 200);
    }
    public static function storeKategori(Request $request){

        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return response([
            'message' => "Succes Store Data",
            'data' => $kategori
        ], 201);
    }

    public static function updateKategori(Request $request, $id){

        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->update();

        return response([
            'message' => "Succes Update Data",
            'data' => $kategori
        ], 201);
    }
    public static function deleteKategori(Request $request){

        $kategori = Kategori::find($request->id);
        // $kategori->nama = $request->nama;
        // $kategori->deskripsi = $request->deskripsi;
        $kategori->delete();

        return response([
            'message' => "Succes Delete Data",
            'data' => $kategori
        ], 201);
    }







    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();

        return view('kategori.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'desc' => 'required|string'
        ]);

        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->desc;

        $kategori->save();

        return redirect(route('kategori.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kategori::find($id);

        return view('kategori.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'desc' => 'required|string'
        ]);

        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->desc;

        $kategori->update();

        return redirect(route('kategori.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
