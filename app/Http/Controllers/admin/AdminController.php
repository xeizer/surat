<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view ('admin/admintambahakun');
    }
    public function create(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'role' => 'required',
        'password' => 'required',
    ]);

    $data = new User();
    $data->name = $request->name;
    $data->email  = $request->email;
    $data->role  = $request->role;
    $data->password  = hash::make($request->password);
    $data->save();

    return redirect('/manajemenakun');
}
    public function manajemenakun()
    {   
        $user = User::all();
        return view('surat/manajemenakun')->with([
            'user' => $user
        ]);
    }
    public function adminedit($id)
    {
        $user = User::find($id);
        return view('admin.adminedit', compact('user'));
    }
    public function adminupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);
        $users = User::find($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => hash::make($request->password),
        ]);
        return redirect('/manajemenakun');
    }
    public function destroy($id)
    {
        $destroy = User::find($id);
        $destroy->delete();
        return redirect('/manajemenakun');
    }
}
