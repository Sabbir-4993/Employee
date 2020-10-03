<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'department_id' => 'required',
            'role_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'start_form' => 'required',
            'designation' => 'required'
        ]);
        $data = $request->all();
        if ($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }
        $data = $request->all();
        dd($data);
//        else{
//            $image = 'avater2.png';
//        }
//        $data['name']= $request->firstname.' '.$request->lastname;
//        $data['image']=$image;
//        $data['password'] = bcrypt($request->password);
//        User::create($data);
//        return redirect()->back()->with('message','User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
