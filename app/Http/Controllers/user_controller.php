<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\User;
=======
use App\User;
use Illuminate\Http\Request;
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('user.list',['users'=>user::all()]);
        
    }


=======
        return view('user.list',['users'=>User::all()]); 
    }

>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('user.create');
=======
         return view('user.create');
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
            $user=new users;
=======
             return redirect('users');
            return $request;
            $user=new User;
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
            $user->id=$request->MSSV;
            $user->username=$request->ten;
            $user->password="None";
            $user->active="None";
            $user->admin="None";
            $user->remember_token="None";
            $user->create_at="None";
            $user->update_at="None";
            $user->save();
<<<<<<< HEAD
            return redirect()->route('users.index');
=======
            return redirect('users');
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
=======
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
=======
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
=======
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
=======
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
    {
        //
    }
}
