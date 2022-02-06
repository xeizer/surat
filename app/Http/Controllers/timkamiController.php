<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\timkami;
use Illuminate\Support\Facades\DB;

class timkamiController extends Controller
{
    public function index() {
        $timkami = timkami::get();
        return view('timkami', compact('timkami'));
    }
    public function upload(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
        ]);
        $upload = timkami::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'github' => $request->github,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
        ]);
        return redirect('/timkami');
    }
    public function edit($id) {

    }
    public function hapus($id) {
        $tim = timkami::findorfail($id);
        $tim->delete();

        return redirect('/timkami');
    }
}
