<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DramaPrice extends Model
{
    use HasFactory;
    
    private static $dramaPrice ; 
    public static function dramaPrice($id, $data)
    {
        foreach ($data as $item)
        { 
            self::$dramaPrice = new DramaPrice();
            self::$dramaPrice->drama_id  = $id;
            self::$dramaPrice->label = $item['label']; 
            self::$dramaPrice->price = $item['price'];
            self::$dramaPrice->save();
        }
    }
   
}
