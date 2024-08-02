<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function display(){
        return view('admin1');
    }

    public function show(string $id){
        $id = intval($id);
        $user = DB::table('users')->join('role_user', 'users.id', '=', 'user_id')->join('roles', 'user_id', '=', 'roles.id')->where('users.id', '=', $id)->select('users.firstname', 'users.lastname', 'roles.name', 'users.id', 'users.email')->orderBy('lastname', 'asc')->get();
        return view('admin2', ['user' => $user]);
    }
    
    public function edit(Request $request){
        if(isset($request['contribution'])){
            DB::table('users')->where('id', '=', $request['id'])->update(['contribution_date' => Carbon::now()]);
        }
        DB::table('users')
        ->where('id', '=', $request['id'])
        ->update(['firstname' => strip_tags($request['firstname']),
        'lastname' => strip_tags($request['lastname']),
        'email' => strip_tags($request['email'])]);
        $user = DB::table('users')->join('role_user', 'users.id', '=', 'user_id')->join('roles', 'user_id', '=', 'roles.id')->where('users.id', '=', $request['id'])->select('users.firstname', 'users.lastname', 'roles.name', 'users.id', 'users.email')->orderBy('lastname', 'asc')->get();
        return view('admin2', ['user' => $user]);
    }

    public function showRole($id){
        $id = intval($id);
        $user = DB::table('users')->join('role_user', 'users.id', '=', 'user_id')->join('roles', 'user_id', '=', 'roles.id')->where('users.id', '=', $id)->select('users.firstname', 'users.lastname', 'roles.name', 'users.id', 'users.email')->orderBy('lastname', 'asc')->get();
        return view('admin3', ['user' => $user]);
    }
}
