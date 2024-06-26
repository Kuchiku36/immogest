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
        
        $rowBien=Bien::where('id',$rowBien->id)->first();
        $similar=Bien::where('category_id', $rowBien->category_id)->inRandomOrder()->limit(4)->get();
        
        return view ('show', compact('rowBien','similar'));
    }
    public function category(Category $category) {
        
        $categories = Category::all();
        $biens=Bien::where('category_id', $category->id)->paginate(5);
        
        return view('index',compact('biens','categories'));

    }
    //
}
