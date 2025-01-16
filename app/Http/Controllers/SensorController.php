<?php

namespace App\Http\Controllers;
use App\Models\DbRealtime;
use App\Models\DbRealtime2;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request)
    {
        DbRealtime::create([
            'r1_arus' => $request->r1_arus,
            'r1_tegangan' => $request->r1_tegangan,
            'r1_daya' => $request->r1_daya,
            'r1_pengguna' => $request->r1_pengguna,
        ]);

        return response()->json(['message' => 'Data Berhasil Dikirim!'], 200);
    }

    public function store2(Request $request)
    {
        DbRealtime2::create([
            'r2_arus' => $request->r2_arus,
            'r2_tegangan' => $request->r2_tegangan,
            'r2_daya' => $request->r2_daya,
            'r2_pengguna' => $request->r2_pengguna,
        ]);

        return response()->json(['message' => 'Data Berhasil Dikirim!'], 200);
    }
}
