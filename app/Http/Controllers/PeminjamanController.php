<?php

namespace App\Http\Controllers;
use App\Peminjaman;
use App\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeminjamanController extends Controller
{
    public function index(){
        // $peminjamen = Peminjaman::all();

        $data = Peminjaman::with('buku')->get(); 
        return response()->json($data);
    }
    public function show($id)
    {
        
        $data = Peminjaman::with('buku')->where('id', $id)->first();
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
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "tanggal_pinjam"=> "required|date_format:d-m-y",
            "tanggal_kembali"=> "required|date_format:d-m-y",
            "nama_peminjam"=> "required",
            "alamat" => "required"
            // "buku_id"=> "required|integer"
        ]);

        if ($validasi->passes()){
            $data = Peminjaman::create($request->all());
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
    public function destroy($id)
    {
        $data = Peminjaman::where('id', $id)->first();
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
    public function edit(Request $request, Peminjaman $peminjaman)
    {
       
        $peminjaman->update($request->all());
        return response()->json(['pesan' => 'Data berhasil diubah', 
        'data'=> $peminjaman]);
    
    }
}
