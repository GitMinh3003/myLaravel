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
    public function index(User $user) {
        return view('home',['user' => $user]);
    }
}
