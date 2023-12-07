<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function editProfile(Request $request){

        $user = DB::table('users')->where('id', $request->query('id'))->get();

        return view('edit_profile')
        ->with('field', $request->query('field'))
        ->with('admin_id', $request->query('id'))
        ->with('user', $user);
    }

    public function updateProfile(Request $request){
        $adminId = $request->admin_id;
        $field = $request->field;
        $value = ($field === 'password') ? password_hash($request->value, PASSWORD_DEFAULT) : $request->value;

        $affected = DB::table('users')
              ->where('id', $adminId)
              ->update([$field => $value]);
        
        return redirect()->route('adminProfile')
        ->with('success', 'Profile berhasil diedit');
    }
}
