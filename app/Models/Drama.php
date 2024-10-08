<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    use HasFactory;
    private static $drama, $dramaUpdate;

    public static function newDrama($request,$id=null){
        if ($id != null){
            self::$drama=Drama::find($id);
        }
        else{
            self::$drama=new Drama();
        }
        return self::saveBasicInfo( self::$drama, $request);
    }

    private static function saveBasicInfo($drama, $request )
    {
        $drama->title                   = $request->title;
        $drama->short_biography         = $request->short_biography;
        $drama->director                = $request->director;
        $drama->writer                  = $request->writer;
        $drama->producer                = $request->producer;
        $drama->music                   = $request->music;
        $drama->makeup                  = $request->makeup;
        $drama->sound                   = $request->sound;
        $drama->stage_designer          = $request->stage_designer;
        $drama->production_start_date   = $request->production_start_date;
        $drama->release_date            = $request->release_date;
        $drama->description_one         = $request->description_one;
        $drama->description_two         = $request->description_two;
        $drama->video_link              = $request->video_link;
        $drama->status                  = $request->status;
        $drama->drama_status                  = $request->drama_status;
        
        if($request->file('title_image')){
            if(file_exists($drama->title_image)){
                unlink($drama->title_image);
            }
            $drama->title_image = imageUpload($request->title_image, 'adminAsset/drama/', 'title-image'); 
        }
        if($request->file('feature_image')){
            if(file_exists($drama->feature_image)){
                unlink($drama->feature_image);
            }
            $drama->feature_image = imageUpload($request->feature_image, 'adminAsset/drama/', 'feature-image');
            }
        if($request->file('slider_image')){
            if(file_exists($drama->slider_image)){
                unlink($drama->slider_image);
            }
            $drama->slider_image = imageUpload($request->slider_image, 'adminAsset/drama/', 'slider-image');
       }
        if($request->file('video_background_image')){
            if(file_exists($drama->video_background_image)){
                unlink($drama->video_background_image);
            }
            $drama->video_background_image = imageUpload($request->video_background_image, 'adminAsset/drama/', 'video-background-image'); 
        }
          
        $drama->save();
        return $drama;
    }

    public function dramadetails()
    {
        return $this->hasMany(DramasDetail::class);
    }

    public function dramaPrice(){
        return $this->hasMany(DramaPrice::class);
    }
 

}
