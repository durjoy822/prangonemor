<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Drama;
use App\Models\DramaPrice;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index($id)
    { 
        //  return  Drama::where('id',$id)->select('id','title')->get();
        return view('web.booking.index',[
            'drama' => Drama::where('id',$id)->select('id','title')->get(),
             'dramaPrice' => DramaPrice::where('drama_id',$id)->get()
        ]);
    }

    public function store(Request $request)
    { 
        // return $request;
        Booking::saveInfo($request);

        return view('web.booking.message');
    }

    public function bookingAdmin(){
        return view('admin.booking.index',[
            'bookings' => Booking::all()

        ]);
    }

    public function edit($id){ 
          $drama_id= Booking::find($id);  
        return view('admin.booking.edit',[
            'booking' => Booking::find($id),
            'dramaPrice' => DramaPrice::where('drama_id',$drama_id['drama_id'])->get()

        ]);
    }
    public function update(Request $request,$id){
        Booking::saveInfo($request,$id);
        return view('admin.booking.index',[
            'bookings' => Booking::all()

        ]);
    }
}
