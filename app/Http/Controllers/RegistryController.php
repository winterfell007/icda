<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistryController extends Controller
{
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registry.register');
    }
    public function handleRegister(Request $request)
    {
        $this->validate($request, [
            'propertyID'=> 'required',
            'title'=> "required",
            'firstname'=> "required",
            'lastname'=> "required",
            'mobileNumber'=> "required",
            'profession'=> "required",
            'zoneCode'=> "required",
            'email'=> "required",
            'gender'=> "required",
            'maritalStatus'=> "required",
            'membership'=> "required",
            'address'=> "required",
            'username'=> "required",
            'password'=> "required",
        ]);
        
         User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'propertyID'=> $request->input('propertyID'),
            'title'=> $request->input('title'),
            'firstname'=> $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'mobileNumber'=> $request->input('mobileNumber'),
            'profession'=> $request->input('profession'),
            'zoneCode'=> $request->input('zoneCode'),
            'gender'=> $request->input('gender'),
            'maritalStatus'=> $request->input('maritalStatus'),
            'membership'=> $request->input('membership'),
            'address'=> $request->input('address'),
            'username'=> $request->input('username'),
            'password'=> $request->input('password'),
        ]);

        return redirect('registry/new-user')->with('success', 'New User created!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsers()
    {
        $vars = array(
            'users' => User::all(),
        );
        return view('registry.users')->with($vars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
