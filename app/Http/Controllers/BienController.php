<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function index() {
        $bien = Bien ::all();
        return view('index',compact('bien'));
        
    }
    //
}
