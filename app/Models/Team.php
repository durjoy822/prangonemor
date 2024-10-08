<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    private static $team;
    public static  function saveInfo($request,$id=null){
        if ($id != null){
            self::$team=Team::find($id);
        }
        else{
            self::$team=new Team();
        }
        self::$team->name=$request->name;
        self::$team->designation=$request->designation;
        self::$team->email=$request->email;
        self::$team->phone=$request->phone;
        self::$team->personal_info=$request->personal_info;
        self::$team->experience=$request->experience;
        self::$team->short_description=$request->short_description;
        self::$team->long_description=$request->long_description; 
        self::$team->location=$request->location;
        self::$team->member_type=$request->member_type;
        self::$team->facebook=$request->facebook;
        self::$team->twitter=$request->twitter;
        self::$team->instagram=$request->instagram;
        self::$team->linkdin=$request->linkdin;
        self::$team->youtube=$request->youtube;
        if($request->file('image')){
            if(file_exists(self::$team->image)){
                unlink(self::$team->image);
            }
            self::$team->image = imageUpload($request->image, 'adminAsset/teams/', 'team-image'); 
        }
       
        self::$team->save();
    }
 
}
