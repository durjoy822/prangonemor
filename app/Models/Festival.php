<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;

    private static $festival;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$festival=Festival::find($id);
        }
        else{
            self::$festival=new Festival();
        } 

        self::$festival->title=$request->title;
        self::$festival->video_link=$request->video_link;
        self::$festival->description_one=$request->description_one;
        self::$festival->description_two=$request->description_two; 
        if($request->file('title_image')){
            if(file_exists(self::$festival->title_image)){
                unlink(self::$festival->title_image);
            }
            self::$festival->title_image = imageUpload($request->title_image, 'adminAsset/festival/', 'festival-title-image');  
        }
        if($request->file('feature_image')){
            if(file_exists(self::$festival->feature_image)){
                unlink(self::$festival->feature_image);
            }
            self::$festival->feature_image = imageUpload($request->feature_image, 'adminAsset/festival/', 'festival-feature-image');  
        }
        if($request->file('video_image')){
            if(file_exists(self::$festival->video_image)){
                unlink(self::$festival->video_image);
            }
            self::$festival->video_image = imageUpload($request->video_image, 'adminAsset/festival/', 'festival-video-image');  
        }
        self::$festival->save();
    }

    // private static  function saveImage($request){
    //     $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
    //     $photo=$request->file('image');
    //     $photoName=$timestamp.'.'.$photo->extension();
    //     $dir='adminAsset/festival/';
    //     $imgUrl=$dir.$photoName;
    //     $photo->move($dir,$photoName);
    //     return $imgUrl;
    // }
}
