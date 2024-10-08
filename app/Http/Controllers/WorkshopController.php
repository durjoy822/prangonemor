<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.workshop.index',[
            'workshops'=>Workshop::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workshop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Workshop::saveInfo($request);
        Session::flash('success','Workshop Add Successfully');
        return redirect()->route('workshops.index');
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
        return view('admin.workshop.edit',[
            'workshop'=>Workshop::find($id),
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
        Workshop::saveInfo($request,$id);
        Session::flash('success','Festival Add Successfully');
        return redirect()->route('workshops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop=Workshop::find($id);
        if(file_exists($workshop->title_image)){
             unlink($workshop->title_image);
        }
         
        if(file_exists($workshop->feature_image)){
             unlink($workshop->feature_image);
        } 
        if(file_exists($workshop->video_image)){
             unlink($workshop->video_image);
        }
        
        $workshop->delete();
        Session::flash('success','Workshop Delete successfully ');
        return back();
    }
}
