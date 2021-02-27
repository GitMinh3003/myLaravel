<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel as SliderModel;

class SliderControllers extends Controller
{
    public function index() {
        $items = SliderModel::all();
        foreach($items as $item) {
            echo $item->MoTa."<br>";
        }
    }
}
