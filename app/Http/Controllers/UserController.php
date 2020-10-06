<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.user.index',compact('users'));
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
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string',
            'mobile_number'=>'required',
            'address'=>'required',
            'department_id'=>'required',
            'role_id'=>'required',
            'designation'=>'required',
            'start_form'=>'required',
            'image'=>'mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }
        else{
            $image = 'avater.png';
        }

        $data['name'] = $request->firstname.' '.$request->lastname;
        $data['image']= $image;
        $data['password'] = bcrypt($request->password);

        User::create($data);
        return redirect()->back()->with('message','User Created Successfully');
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
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|string|email|max:255|unique:users,email,'.$id,
            'mobile_number'=>'required',
            'address'=>'required',
            'department_id'=>'required',
            'role_id'=>'required',
            'designation'=>'required',
            'start_form'=>'required',
            'password'=>'required'
        ]);

        $data = $request->all();

        $user = User::find($id);
        if ($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }
        else{
            $image = $user->image = 'avater.png';
        }
        if($request->password){
            $password = $request->password;
        }else{
            $password = $user->password;
        }
        $data['$image']=$image;
        $data['$password']=bcrypt($password);
        $user->update($data);
        return redirect()->back()->with('message', 'User Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('message', 'User Deleted Successfully');
    }
}
