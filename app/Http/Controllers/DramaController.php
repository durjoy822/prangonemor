<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Drama;
use App\Models\DramaPrice;
use App\Models\DramasDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $drama,$newDramaDetail;
    public function index()
    {
        return view('admin.drama.manage',[
            'dramas'=>Drama::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return  view('admin.drama.create');
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
             'title'=>'required',
         ]);
         $this->drama = Drama::newDrama($request);
         DramaPrice::dramaPrice($this->drama->id, $request->ticket);
         Session::flash('success','Drama Info Added Successfully.') ;
         return redirect()->route('dramas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.drama.show',[
            'drama'=>Drama::find($id),
            'dramaPrices'=>DramaPrice::where('drama_id',$id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.drama.edit',[
            'drama'=>Drama::find($id),
            'dramaPrices'=>DramaPrice::where('drama_id',$id)->get(),
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
        $this->drama = Drama::newDrama($request,$id); 

        DramaPrice::where('drama_id', $this->drama->id)->delete(); 
        DramaPrice::dramaPrice($this->drama->id, $request->ticket);
        Session::flash('success','Drama Info Added Successfully.') ;
        
        return redirect()->route('dramas.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $drama = Drama::find($id); 
        if(file_exists($drama->title_image)){
            unlink($drama->title_image);
        }
        if(file_exists($drama->feature_image)){
            unlink($drama->feature_image);
        }
        if(file_exists($drama->slider_image)){
            unlink($drama->slider_image);
        }
        if(file_exists($drama->video_background_image)){
            unlink($drama->video_background_image);
        }
        $drama->delete(); 
        DramaPrice::where('drama_id', $id)->delete();
        Session::flash('success','Drama Info Delete Successfully');
        return redirect()->route('dramas.index');
     
    }

}
