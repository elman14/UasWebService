<?php

namespace App\Http\Controllers;
use App\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BukuController extends Controller
{
    public function index(){

        $bukus = Buku::all(); 
        return response()->json($bukus);
    }
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
        $validasi = Validator::make($request->all(), [
            "judul_buku" => "required",
            "penulis_buku" => "required",
            "penerbit_buku" => "required",
            "tahun_penerbitan" => "required|integer"
        ]);

        if ($validasi->passes()){
            $data = Buku::create($request->all());
            return response()->json([
                'pesan' => 'Data Berhasil ditambahkan',
                'data' => $data
            ], 200);
        }
        return response()->json([
            'pesan' => 'Data Gagal disimpan',
            'data' => $validasi->errors()->all()
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // cara 1
        // return $id;
        // Cara 2
        $data = Buku::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak ditemukan',
                'data' => ''
            ], 404);
        }
        return response()->json([
            'pesan' => 'Data Berhasil ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Buku $buku)
    {
       
        $buku->update($request->all());
        return response()->json(['pesan' => 'Data berhasil diubah', 
        'data'=> $buku]);
    
    }

    
    public function destroy($id)
    {
        $data = Buku::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak ditemukan',
                'data' => ''
            ], 404);
        }

        $data->delete();
        return response()->json([
            'pesan' => 'Data Berhasil Dihapus',
            'data' => $data
        ], 200);
    }
    }



