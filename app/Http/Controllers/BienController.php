<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Category;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function index() {
        $categories = Category::all();
        $biens = Bien ::paginate(5);
        return view('index',compact('biens','categories'));
        
    }

    public function show(Bien $rowBien) {
        return view ('show', compact('rowBien'));
        
    }
    //
}
