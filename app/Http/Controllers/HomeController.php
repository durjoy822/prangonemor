<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Drama;
use App\Models\Festival;
use App\Models\Performer;
use App\Models\Statement;
use App\Models\Team;
use App\Models\WorkPrangonmor;
use App\Models\Workshop; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( )
    {   
         
        return view('web.home',[
            'about' =>About::latest()->first(),
            'productions' => Drama::inRandomOrder()->get(),
            'upcoming_show_productions' => Drama::where('drama_status',1)->get(),
            'upcoming_new_productions' => Drama::where('drama_status',2)->get()
        ]);
    }

    public function drama(){
        return  view('web.drama.drama',[
            'performers'=>Performer::latest()->get(),
        ]);
    }

    public function statement(){
        return view('web.statement',[
            'statement'=>Statement::first(),
        ]);
    }

    public function about(){
        return view('web.about',[
            'about'=>About::first(),
        ]);
    }

    public function founder(){
        return view('web.about.founder',[
            'founders'=>Team::where('member_type',1)->inRandomOrder()->get(),

        ]);
    }
 
    public function workPrangonemor() {
        return view('web.work-prangonemor',[
            'workPrangonmors' => WorkPrangonmor::all()
        ]);
    }

    public function production() {
        return view('web.production.index');
    }

    public function productionDetail($id) {
         
        return view('web.production.detail',[
            'drama' => Drama::find($id)
        ]);
    }

    public function workshop() {
        return view('web.workshop.index');
    }


    public function workshopDetail($id) {
        return view('web.workshop.detail',[
            'workshop' => Workshop::find($id) 
        ]);
    }


    public function festival() {
        return view('web.festival.index');
    }

    public function festivalDetail($id) {
        return view('web.festival.detail',[
            'festival' => Festival::find($id)
        ]);
    }

   
    public function team(){
        
        return view('web.team.index',[
            'primary_members' => Team::where('member_type',2)->inRandomOrder()->get(),
            'permanent_members' => Team::where('member_type',3)->inRandomOrder()->get(),
            'associate_members' => Team::where('member_type',4)->inRandomOrder()->get(),

        ]);
    }
    public function teamDetail($id){ 
        // return  Team::where('id',$id)->get();
        return view('web.team.detail',[
          'team' => Team::find($id)
        ]);
    }

    public function contact(){
        return view('web.contact',[
            'contact'=>Contact::first(),
        ]);
    }

}
