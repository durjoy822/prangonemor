<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    private static $booking;
 
    public static function saveInfo($request,$id=null){
        if ($id != null){
            self::$booking=Booking::find($id);
            self::$booking->status = $request->status;
        }
        else{
            self::$booking=new Booking();
            self::$booking->drama_id = $request->drama_id;
        } 
        self::$booking->name = $request->name;
        self::$booking->phone = $request->phone;
        self::$booking->email = $request->email;
        self::$booking->price_id = $request->price_id;
        self::$booking->save();

    }

    public function drama() {
        return $this->belongsTo(Drama::class);
        
    }
    public function dramaPrice() {
        return $this->belongsTo(DramaPrice::class,'price_id');
        
    }
}
