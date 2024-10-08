<?php

namespace App\Http\Controllers;

use App\Models\WorkPrangonmor;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class WorkPrangonmorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.workPrangonmor.index',[
            'workPrangonmors'=>WorkPrangonmor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workPrangonmor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         WorkPrangonmor::saveInfo($request);
         Session::flash('success','Work Prangonmor Data Add Successfully');
        
         return redirect()->route('workPrangonmors.index');
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
        return view('admin.workPrangonmor.edit',[
            'workPrangonmor'=>WorkPrangonmor::find($id),
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
        WorkPrangonmor::saveInfo($request,$id); 
        Session::flash('success','Work Prangonmor updated successfully');
        return redirect()->route('workPrangonmors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workPrangonmor=WorkPrangonmor::find($id);
        if(file_exists($workPrangonmor->image)){
            unlink($workPrangonmor->image);
        }
        
        $workPrangonmor->delete();
        Session::flash('success','Work Prangonmor delete successfully.');
        return back() ;
    }
}
