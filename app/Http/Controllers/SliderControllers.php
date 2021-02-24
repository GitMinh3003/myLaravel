<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SliderControllers extends Controller
{
    public function index() {
        $tables = DB::select('SHOW TABLES');
        foreach($tables as $table) {
            echo '<pre>';
            print_r($table);
            echo '</pre>';
        }
    }
}
