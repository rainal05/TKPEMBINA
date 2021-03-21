<?php

namespace App\Http\Controllers;

use App\Has;
use Illuminate\Http\Request;

class HasController extends Controller
{
    //dak pake
    public function index()
    {
        $dt = Has::where('user_id', \Auth::user()->id)->first();
        $cek = Has::where('user_id', \Auth::user()->id)->count();
        return view('has', compact('dt', 'cek'));
    }

    public function store(Request $request)
    {

    }
}
