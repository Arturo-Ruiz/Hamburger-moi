<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('admin.categories.index');
    }


    public function store(Request $request)
    {
        $category = new Category;

        $category->name  =  $request->name;
        $category->status  =  '1';

        $category->save();
    }

    public function change(Request $request)
    {
       $category = Category::find($request->id);

       if ($category->status === '0') {

           $status = '1';
           $category->status = $status;
           $category->save();

       } else {

            $status = '0';
            $category->status = $status;
            $category->save();

       };

    }

}
