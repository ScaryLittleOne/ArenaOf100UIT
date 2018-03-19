<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('checkadmin');
            /*$user = Auth::user();
            $id = Auth::id();
            var_dump($user);
            var_dump($id);*/
        }
    
    public function index()
    {
        return view('user.list',['users'=>User::all()]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
            $user=new User;
            $user->username=$request->MSSV;
            $user->password=bcrypt($request->password);
            $user->active=1;
            $user->admin=0;
            $user->remember_token="None";
            $user->save();
            return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->username=$request->username;
        $user->password=bcrypt($request->password);
        $user->active=1;
        $user->admin=0;
        $user->remember_token="None";
        $user->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::find($user->id);
        $user->delete();
        return redirect('users');   
    }

}