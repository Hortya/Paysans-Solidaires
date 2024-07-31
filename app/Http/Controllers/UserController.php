<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //TODO-------------chek if the email is already in database------------------------
        
        
        $request->validate([
            'firstname' => 'required|string|max:150',
            'lastname' => 'required|string|max:150',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/',
        ]);
        $user = new User();
        $user->firstname = strip_tags($request->firstname);
        $user->lastname = strip_tags($request->lastname);
        $user->email = strip_tags($request->email);
        $user->password = password_hash($request->password, PASSWORD_BCRYPT);
        $user->save();
        var_dump('ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    private function isAdmin(string $idUser){
        $user = DB::table('users')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->where('users.id', '=', $idUser)
        ->select('roles.name')
        ->get();
        if($user === 'admin'){
            return true;
        }
        else {
            return false;
        }
    }

    private function changeRoles(User $user){
        
    }

}