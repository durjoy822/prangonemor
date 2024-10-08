<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    private static $gallery;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$gallery=Gallery::find($id);
        }
        else{
            self::$gallery=new Gallery();
        }
        self::$gallery->name=$request->name;
        if($request->file('image')){
            if(file_exists(self::$gallery->image)){
                unlink(self::$gallery->image);
            }
            self::$gallery->image = self::$gallery->saveImage($request);
        }
        self::$gallery->save();
    }

    private static  function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/gallery/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}
