<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPrangonmor extends Model
{
    use HasFactory;
    private static $workPrangonmore;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$workPrangonmore=WorkPrangonmor::find($id);
        }
        else{
            self::$workPrangonmore=new WorkPrangonmor();
        }  
        self::$workPrangonmore->title=$request->title; 
        self::$workPrangonmore->description=$request->description; 
        self::$workPrangonmore->date=$request->date; 
        if($request->file('image')){
            if(file_exists(self::$workPrangonmore->image)){
                unlink(self::$workPrangonmore->image);
            }
            self::$workPrangonmore->image = imageUpload($request->image, 'adminAsset/workPrangonmore/', 'workPrangonmore-image'); 
        } 
        self::$workPrangonmore->save();
    }
    
}
