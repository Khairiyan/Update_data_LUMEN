<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ControllerMHS extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return 'hello world';
    }

    public function tambahMHS()
    {
        Mahasiswa::create([
            'nama' => 'Yusron',
            'NIM' => '195150701111012',
            'status bayar' => false
        ]);
        
    }

    public function belumBayar()
    {
        $daftarMHS = Mahasiswa::where('status bayar', false)->get();
        if(!$daftarMHS) {
            return response()->json([
                'message' => 'data not found',
            ], 404);
        }
        return response()->json($daftarMHS);
    }

    public function cekBayar()
    {
        $daftarMHS = Mahasiswa::where('status bayar', true)->get();
        if(!$daftarMHS) {
            return response()->json([
                'message' => 'data not found',
            ], 404);
        }
        return response()->json($daftarMHS);
    }

    public function cekMHS($nim)
    {
        $status = Mahasiswa::where('nim', $nim)->get('status bayar');
        if(!$status) {
            return response()->json([
                'message' => 'data not found',
            ], 404);
        }
        return response()->json($status);
    }

    public function KRS(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'statusBayar' => 'required'
        ]);

        if($request['statusBayar'] == 0) {
            return response()->json([
                'message' => 'Pastikan anda telah melakukan pemabayaran UKT semester ini'
            ], 200);
        }

        if($request['statusBayar'] == 1){
        return response()->json([
            'message' => 'Silahkan mengisi Kartu Rencana Studi',
        ], 200);

        if($request['statusBayar'] =! 1 && $request['statusBayar'] =! 0){
        return response()->json([
                'message' => 'Inputkan status pembayaran yang benar',
        ], 200);
        }

    }

    }


  
}
