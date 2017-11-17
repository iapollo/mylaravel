<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
    	$users = ['Andy Low', 'dada Xi'];
    	return view('pages.about',compact('users'));
    }
}
