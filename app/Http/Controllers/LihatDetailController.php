<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class LihatDetailController extends Controller
{
    public function show(Request $request)
    {
        // Ambil ID dari query string
        $id = $request->query('id');
        $tempat = Tempat::findOrFail($id);
        return view('karyawan.lihatdetail', ['tempat' => $tempat]);

    }

    public function show2(Request $request)
    {
        // Ambil ID dari query string
        $id = $request->query('id');
        $tempat = Tempat::findOrFail($id);
        return view('admin.lihatdetail', ['tempat' => $tempat]);

    }
}
