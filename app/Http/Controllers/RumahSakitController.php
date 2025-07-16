<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        return response()->json(RumahSakit::all());
    }

    public function show($id)
    {
        $rs = RumahSakit::find($id);
        if (!$rs) return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($rs);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_rumah_sakit' => 'required',
            'alamat_lengkap' => 'required',
            'no_telpon' => 'required',
            'type_rumah_sakit' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric'
        ]);

        $rs = RumahSakit::create($request->all());
        return response()->json($rs, 201);
    }

    public function update(Request $request, $id)
    {
        $rs = RumahSakit::find($id);
        if (!$rs) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rs->update($request->all());
        return response()->json($rs);
    }

    public function destroy($id)
    {
        $rs = RumahSakit::find($id);
        if (!$rs) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $rs->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}