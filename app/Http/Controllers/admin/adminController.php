<?php

namespace App\Http\Controllers\admin;

use App\about;
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
        $about = about::first();

        return view('admin.settings.about', compact('about'));
    }

    public function contacts()
    {
        return view('admin.settings.contact');


    }

    public function slides()
    {
        return view('admin.settings.slides');

    }

    public function tetimonials()
    {
        return view('admin.settings.testimonials');

    }

    public function redirect(Request $r)
    {

        return redirect()->route('indexAdmin');
    }
}
