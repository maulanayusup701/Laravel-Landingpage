<?php

namespace App\Http\Controllers;

use App\Models\QNA;
use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('Front-end.landingpage',[
            'title' => 'Landing Page',
            'qnas' => QNA::all(),
            'packages' => Package::all(),
            'no_hp' => User::pluck('no_hp')->first()
        ]);
    }
}
