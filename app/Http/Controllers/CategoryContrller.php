<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryContrller extends Controller
{
    public function index(){
        $categorys = Category::all();

        return view('Category.index', compact('categorys'));
    }
}
