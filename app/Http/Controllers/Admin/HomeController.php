<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return view('admin.home');
        }
        else
        {
            return redirect('/');
        }
    }
}
