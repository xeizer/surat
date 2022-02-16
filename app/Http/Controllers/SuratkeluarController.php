<?php

namespace App\Http\Controllers;

use App\Models\Suratkeluar;
use App\srtkeluar;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratkeluarController extends Controller
{
    public function crtkeluar()
    {
        return view('surat/crtkeluar');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nosurat' => 'required',
            'tgl_keluar' => 'required',
            'tgl_surat' => 'required',
            'tujuan' => 'required',
            'perihal' => 'required',
        ], [
            'nosurat.required' => 'Nomor Surat Harus Di isi',
            'tgl_keluar.required' => 'Tanggal Harus Di isi',
            'tgl_surat.required' => 'Tanggal Surat Harus Di isi',
            'tujuan.required' => 'Tujuan Surat Harus Di isi',
            'perihal.required' => 'Perihal Harus Di isi',
        ]);
        $image = $request->image;
        if ($image != null) {
            $filename = time() . '.' . request()->image->getClientOrOriginalExtension();
            request()->image->move(public_path('lampiran'), $filename);
        }

        $suratkeluar = Suratkeluar::create([
            'user_id' => '1',
            'no_surat' => $request->nosurat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_surat' => $request->tgl_surat,
            'tujuan' => $request->tujuan,
            'perihal' => $request->perihal,
            'lampiran' => $filename ?? null,
        ]);

        return redirect('/suratkeluar');
    }

    public function suratkeluar()
    {
        $data = Suratkeluar::all();
        return view('surat/suratkeluar')->with([
            'data' => $data
        ]);
    }

    public function destroy($data)
    {
        $destroy = Suratkeluar::findOrFail($data);
        $destroy->delete();
        return redirect()->route('#');
    }
}



