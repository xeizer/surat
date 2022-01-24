<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratmasukController extends Controller
{
        public function crtmasuk()
    {
        return view('suratmasuk/crtmasuk');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nosurat' => 'required',
            'tgl_masuk' => 'required',
            'tgl_surat' => 'required',
            'asal' => 'required',
            'perihal' => 'required',
            'lampiran' => 'mimes.png,jpg'
        ]);
        $foto = time().".".$request->lampiran->extension();
        $request->lampiran->move(public_path('lampiran'), $foto);
        $simpan = new Suratmasuk();
        $simpan->user_id = Auth::id();
        $simpan->no_surat = $request->nosurat;
        $simpan->tgl_masuk = $request->date('Y-m-d');
        $simpan->tgl_surat = $request->date('Y-m-d');
        $simpan->asal_surat = $request->asal;
        $simpan->perihal = $foto;
        $simpan->save();
        return redirect()->suratmasuk();
    }

    public function suratmasuk()
    {
        return view('suratmasuk/suratmasuk');
    }
}
