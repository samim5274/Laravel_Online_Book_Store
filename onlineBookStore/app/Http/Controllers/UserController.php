<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $uName = $request->has('username')?$request->get('username'):'';
        $pass = $request->has('pass')?$request->get('pass'):'';

        $userInfo = User::where('username','=',$uName)->where('password','=',$pass)->first();
        if(isset($userInfo) && $userInfo!=null)
        {
            return redirect('/addBooks');
        }
        else
        {
           return redirect()->back()->with('loginFail','Wrong username and password. Please try again latter.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        User::Insert([
            'name'=>$request->has('name')?$request->get('name'):'',
            'email'=>$request->has('email')?$request->get('email'):'',
            'mobail'=>$request->has('mobail')?$request->get('mobail'):'',
            'username'=>$request->has('username')?$request->get('username'):'',
            'password'=>$request->has('pass')?$request->get('pass'):'',
        ]);
        return back()->with('success','User create successfully.');
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
}
