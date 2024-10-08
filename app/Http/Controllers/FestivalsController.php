<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FestivalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.festivals.index',[
            'festivals'=>Festival::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.festivals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        return $request;
        $request->validate([
//            'name'=>'required',
//            'image'=>'required',
//            'member_type'=>'required',
        ]);

        Festival::saveInfo($request);
        Session::flash('success','Festival Add Successfully');
        return redirect()->route('festivals.index');
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
        return view('admin.festivals.edit',[
            'festival'=>Festival::find($id),
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
        Festival::saveInfo($request,$id);
        Session::flash('success','Festival Add Successfully');
        return redirect()->route('festivals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $festival=Festival::find($id);
        if(file_exists($festival->title_image)){
             unlink($festival->title_image);
        }
         
        if(file_exists($festival->feature_image)){
             unlink($festival->feature_image);
        } 
        if(file_exists($festival->video_image)){
             unlink($festival->video_image);
        }
        
        $festival->delete();
        Session::flash('success','festival Delete successfully ');
        return back();
    }
}
