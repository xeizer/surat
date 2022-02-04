<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\timkami;
use Illuminate\Support\Facades\DB;

class timkamiController extends Controller
{
    public function index() {
        $timkami = timkami::orderBy('nama')->get();
        return view('tim.timkami', compact('timkami'));
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
        $timkami = timkami::find($id);
        return view('tim/timedit', compact('timkami'));
    }
    public function update(Request $request, $id) {
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
        ]);
        $upload = timkami::find($id)->update([
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
    public function destroy($id) {
        $timkami = timkami::find($id);
        $timkami->delete();
        return redirect('/timkami');
    }
}
