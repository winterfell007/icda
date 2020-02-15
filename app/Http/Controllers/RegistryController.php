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


    public function approveUser(Request $request, $userId)
    {
        
        $user = User::find($userId);
        $user->approval_status = 1;
        $user->save();

        return redirect('/registry/users')->with('success', "User $user->username approved");
    }

    public function disapproveUser(Request $request, $userId)
    {
        
        $user = User::find($userId);
        $user->approval_status = 0;
        $user->save();

        return redirect('/registry/users')->with('secondary', "User $user->username disapproved");
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
            'bonafide_users' => User::where('approval_status','=', '1')->get(),
            'awaiting_users' => User::where('approval_status', null)->get(),
            'disapproved_users' => User::where('approval_status', 0)->get(),
        );
        return view('registry.users')->with($vars);
    }

    public function deleteDisapprovedUsers()
    {
        
            $disapproved_users = User::where('approval_status', 0)->get();
            foreach ($disapproved_users as $disapproved_user) {
                $disapproved_user->delete();
            }
        
        return redirect('/registry/users')->with('error', 'All disapproved users deleted');
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
