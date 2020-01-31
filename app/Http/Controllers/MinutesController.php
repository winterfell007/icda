<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minute;
use App\Agenda;
use DB;

class MinutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vars = array(
        'minutes' => Minute::orderBy('meeting_date', 'desc')->paginate(10),
        'agendas' => Agenda::all(),
        'countAgenda' => function ($minute_id){
            $count = DB::select("SELECT COUNT(id) count FROM agendas WHERE minutes_id = $minute_id;");
            $count = json_decode(json_encode($count), true);
            echo $count[0]['count'];
        }
        );

    
        return view('minutes.minutes')->with($vars);
    }
    public function addAgenda(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
        ]);
        
        $agenda = new Agenda;
            $agenda->agenda_item = $request->input('title');
            $agenda->notes = $request->input('notes');
            $agenda->status = $request->input('sub-btn');
            $agenda->minutes_id = $request->input('current_minute');

            $agenda->save();
        return redirect('minutes')->with('success', 'New item successfully added to agenda');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
