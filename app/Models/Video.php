<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    private static $video;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$video=Video::find($id);
        }
        else{
            self::$video=new Video();
        }
        self::$video->name=$request->name;
        self::$video->link=$request->link;
        self::$video->save();
    }

}
