<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamsCondition extends Model
{
    use HasFactory;

    private static $teamsCondition;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$teamsCondition=TeamsCondition::find($id);
        }
        else{
            self::$teamsCondition=new TeamsCondition();
        }
        self::$teamsCondition->title=$request->title;
        self::$teamsCondition->description=$request->description;
        self::$teamsCondition->type=$request->type;
        if($request->file('image')){
            if(file_exists(self::$teamsCondition->image)){
                unlink(self::$teamsCondition->image);
            }
            self::$teamsCondition->image = self::$teamsCondition->saveImage($request);
        }
        self::$teamsCondition->save();
    }

    private static  function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/festival/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}
