<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    public function signIn(){
        return view('pages.signin');
    }
    public function contactus(){
        return view('pages.contactus');
    }
    public function getAttendances(){
        return view('meetings.viewAttendances');
    }
}
