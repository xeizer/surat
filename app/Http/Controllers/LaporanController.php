<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuk;
use App\Models\Suratkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        $surma = Suratmasuk::all();
        $csurma = DB::table('suratmasuks')->count();
        $surke = Suratkeluar::all();
        $csurke = DB::table('suratkeluars')->count();
        return view('laporan/laporan', compact('surma','csurma','surke','csurke'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {
        $surma = Suratmasuk::all();
        $csurma = DB::table('suratmasuks')->count();
        $surke = Suratkeluar::all();
        $csurke = DB::table('suratkeluars')->count();
        return view('laporan/cetak', compact('surma','csurma','surke','csurke'));
    }



}
