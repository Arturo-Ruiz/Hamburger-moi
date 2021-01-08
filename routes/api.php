<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Category;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('categories', function () {
    return datatables()
    ->eloquent(Category::query())
    ->addColumn('btn', 'admin.categories.actions')
    ->rawColumns(['btn'])
    ->toJson();
});

Route::any('categories/delete', 'Admin\CategoriesController@destroy');

Route::any('categories/create', 'Admin\CategoriesController@store');

