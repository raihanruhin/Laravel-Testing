<?php

namespace App\Http\Controllers;

use IlluminateCookieCookieJar;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
   
	public function getCookie(Request $request) {
        return $request->cookie('name');
    }
    public function setCookie(Request $request)
    {
    	return response('')->withCookie(cookie('name', 'my value', 60));
    }
}
