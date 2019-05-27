<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //add a method reflecting the action in PagesController@home
    public function home()
    {
        return view('welcome', [
    		'foo' => 'bar'
		]);
    }
}
