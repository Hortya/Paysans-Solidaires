<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/'
        ]);
        $user = new User();
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


    public function isEmailKnowned(String $mail)
    {

        foreach (User::all() as $user) {

            if ($mail === $user->email) {

                return $user->id;
            }
        }

        return 0;
    }

    public function connexion()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {
        $userId=self::isEmailKnowned($request->email);

            if ($userId === 0) {
                echo "cet e-mail est inconnu";
            }
            else {
                echo $userId;
            }
    }
}
