<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends HelpController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin_dashboard.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'access' => 'required',
            'email' => 'required',
            'password' => 'required',
            'pro_image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $image=$this->imageUploader($request['pro_image']);
        User::create([
            'name' => $request['name'],
            'access' => $request['access'],
            'email' => $request['email'],
//            'password' => $request['password'],
            'password' => Hash::make($request['password']) ,
            'pro_image' => $image,
        ]);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $users = User::find($id);
        return view('admin_dashboard.users.edit' , compact('users'))
            ->with('users' , User::where('id' , $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id' , $id)
            ->update([
                'name' => $request['name'],
                'access' => $request['access'],
                'email' => $request['email'],
                'password' => $request['password'],
            ]);
        return redirect(url('/master/users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::where('id' , $id);
        $users->delete();

        return redirect(route('users.index'));
    }

}
