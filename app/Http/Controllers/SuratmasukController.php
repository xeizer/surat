<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuk;
use App\srtmasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratmasukController extends Controller
{
    public function crtmasuk()
    {
        return view('suratmasuk/crtmasuk');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nosurat' => 'required',
            'tgl_masuk' => 'required',
            'tgl_surat' => 'required',
            'asal' => 'required',
            'perihal' => 'required',
        ], [
            'nosurat.required' => 'Nomor Surat Harus Di isi',
            'tgl_masuk.required' => 'Tanggal  Harus Di isi',
        ]);
        $image = $request->image;
        if ($image != null) {
            $filename = time() . '.' . request()->image->getClientOrOriginalExtension();
            request()->image->move(public_path('lampiran'), $filename);
        }

        $suratmasuk = Suratmasuk::create([
            'user_id' => '1',
            'no_surat' => $request->nosurat,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_surat' => $request->tgl_surat,
            'asal_surat' => $request->asal,
            'perihal' => $request->perihal,
            'lampiran' => $filename ?? null,
        ]);

        return redirect('/suratmasuk');
    }

    public function suratmasuk()
    {
        return view('suratmasuk/suratmasuk');
    }
}
