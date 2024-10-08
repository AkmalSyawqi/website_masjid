<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Language;
use App\Helper\Helpers;

class PengurusController extends Controller
{
    public function index()
    {
        Helpers::read_json();

        if(!session()->get('session_short_name')) {
            $current_short_name = Language::where('is_default','Yes')->first()->short_name;
        } else {
            $current_short_name = session()->get('session_short_name');
        }    
        $current_language_id = Language::where('short_name',$current_short_name)->first()->id;
        
        $profil = Profil::where('language_id',$current_language_id)->first();
        return view('front.pengurusmasjid', compact('profil'));
    }
}
