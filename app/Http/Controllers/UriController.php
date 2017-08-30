<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    
    public function index(Request $request)
    {
    	$path = $request->path();
    	echo '<br>Path ' . $path;

    	$pattern = $request->is('foo/*');
    	echo '<br>Match ' . $pattern;

    	$url = $request->url();
    	echo '<br>url ' . $url;
    }
}
