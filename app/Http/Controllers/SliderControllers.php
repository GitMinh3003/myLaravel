<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel as SliderModel;
use App\Models\User;

class SliderControllers extends Controller
{
    // public function index() {
    //     $items = SliderModel::all();
    //     foreach($items as $item) {
    //         $val = $item->tendm;
    //         return view('home',["val" => $val]);
    //     }
    // }
    public function getXinChao($user) {
        return view('form');
    }
    public function getTamBiet($ten,$namsinh) {
        return "Tam biet toi ten la ".ucfirst($ten)." nam sinh ".$namsinh;
    }
}
