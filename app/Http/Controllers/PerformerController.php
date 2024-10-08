<?php

namespace App\Http\Controllers;

use App\Models\Performer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.performer.index',[
            'performers'=>Performer::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.performer.create');
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
            'name'=>'required',
            'position'=>'required',
            'character'=>'required',
        ]);
        $performer= new Performer();
        $performer->name=$request->name;
        $performer->position=$request->position;
        $performer->character=$request->character;
        $performer->save();
        Session::flash('success','Performer add successfully.');
        return redirect()->route('performers.index');

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
        return view('admin.performer.edit',[
            'performer'=>Performer::find($id),
        ]);
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
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'character'=>'required',
        ]);
        $performer= Performer::find($id);
        $performer->name=$request->name;
        $performer->position=$request->position;
        $performer->character=$request->character;
        $performer->save();
        Session::flash('success','Performer updated successfully.');
        return redirect()->route('performers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Performer::find($id)->delete();
        Session::flash('success','Performer delete successfully.');
        return back();

    }
}