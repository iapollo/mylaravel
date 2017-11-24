<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
    	return view('welcome');
    }

    public function about()
    {
    	$users = ['Andy low','dada Xi'];
        return view('pages.about',compact('users'));
    }

    public function test()
    {
    	return view('pages.test');
    }

    public function index()
    {
        return view('pages.index');
    }
}
