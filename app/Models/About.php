<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    private static $about;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$about=About::find($id);
        }
        else{
            self::$about=new About();
        } 
        self::$about->details=$request->details; 
        if($request->file('image')){
            if(file_exists(self::$about->image)){
                unlink(self::$about->image);
            }
            self::$about->image = imageUpload($request->image, 'adminAsset/about/', 'about-image'); 
        } 
        self::$about->save();
    }
}
