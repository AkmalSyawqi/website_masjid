<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Language;
use App\Helper\Helpers;


class KalkulatorController extends Controller
{
    public function zakatPenghasilan()
    {
        Helpers::read_json();

        if (!session()->get('session_short_name')) {
            $current_short_name = Language::where('is_default', 'Yes')->first()->short_name;
        } else {
            $current_short_name = session()->get('session_short_name');
        }
        $current_language_id = Language::where('short_name', $current_short_name)->first()->id;
        
        $informasi = Informasi::all();
        return view('front.zakat_penghasilan', compact('informasi'));
    }
    public function zakatMal()
    {
        Helpers::read_json();

        if (!session()->get('session_short_name')) {
            $current_short_name = Language::where('is_default', 'Yes')->first()->short_name;
        } else {
            $current_short_name = session()->get('session_short_name');
        }
        $current_language_id = Language::where('short_name', $current_short_name)->first()->id;
        
        $informasi = Informasi::all();
        return view('front.zakat_mal', compact('informasi'));
    }
    public function zakatFitrah()
    {
        Helpers::read_json();

        if (!session()->get('session_short_name')) {
            $current_short_name = Language::where('is_default', 'Yes')->first()->short_name;
        } else {
            $current_short_name = session()->get('session_short_name');
        }
        $current_language_id = Language::where('short_name', $current_short_name)->first()->id;
        
        $informasi = Informasi::all();
        return view('front.zakat_fitrah', compact('informasi'));
    }
}
