<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Attendance;
use DB;

class AttendancesController extends Controller
{
    public function getAttendances(){

        
        $vars = [
            'users' => User::all(),
            'dates' => Attendance::distinct()->select('meeting_date')->get(),
        ];
       
        return view('meetings.viewAttendances')->with($vars);
    }
    public function postAttendance(Request $request){
        
        // return $request;
        $meeting_date = $request->input('meeting-date');
        
        $count = $request->input('count');

         for ($i = 1; $i < $count; $i++) {
             if(!$request->input('presence-'.$i)){
                 continue;
             }
                $attendance = new Attendance;
                $attendance->userID = $request->input('presence-'.$i);
                $attendance->meeting_date = $meeting_date;
                $attendance->presence = 1;
                $attendance->save();
           
        }
       

       
        return redirect('/meetings/attendances')->with('success', "Attendance for $meeting_date successfully marked");
    }
}
