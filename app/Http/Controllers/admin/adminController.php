<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index()
    {
        return 'masuk';
    }

    public function login()
    {
       return view('admin.login');
    }

    public function dashboard()
    {
     return view('admin.dashboard');
    }

    public function about()
    {
     return view('admin.settings.about');
    }

    public function redirect(Request $r)
    {

        return redirect()->route('indexAdmin');
    }
}
