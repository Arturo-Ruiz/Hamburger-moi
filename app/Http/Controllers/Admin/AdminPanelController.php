<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminPanelController extends Controller
{
    public function index(){
        if(Auth::user()->role === '1'){
            return view('admin.index');
        }else{
            return redirect(route('login-admin'))->with('danger', 'Acceso Denegado');
        }
    }
}
