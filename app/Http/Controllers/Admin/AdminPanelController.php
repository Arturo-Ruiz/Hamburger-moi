<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Combo;


class AdminPanelController extends Controller
{
    public function index(){
        $categories_number = Category::all()->count();
        $products_number = Product::all()->count();
        $combos_number = Combo::all()->count();

        return view('admin.index', compact('categories_number', 'products_number', 'combos_number'));
    }
}
