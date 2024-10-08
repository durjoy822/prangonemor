<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    private static $workshop;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$workshop=Workshop::find($id);
        }
        else{
            self::$workshop=new Workshop();
        }
        self::$workshop->title=$request->title;
        self::$workshop->video_link=$request->video_link;
        self::$workshop->description_one=$request->description_one;
        self::$workshop->description_two=$request->description_two; 
        if($request->file('title_image')){
            if(file_exists(self::$workshop->title_image)){
                unlink(self::$workshop->title_image);
            }
            self::$workshop->title_image = imageUpload($request->title_image, 'adminAsset/workshop/', 'workshop-title-image');  
        }
        if($request->file('feature_image')){
            if(file_exists(self::$workshop->feature_image)){
                unlink(self::$workshop->feature_image);
            }
            self::$workshop->feature_image = imageUpload($request->feature_image, 'adminAsset/workshop/', 'workshop-feature-image');  
        }
        if($request->file('video_image')){
            if(file_exists(self::$workshop->video_image)){
                unlink(self::$workshop->video_image);
            }
            self::$workshop->video_image = imageUpload($request->video_image, 'adminAsset/workshop/', 'workshop-video-image');  
        }
        self::$workshop->save();
    }

    private static  function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/workshop/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}
