<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home() {

    	return view('index');

    }

    public function godkiller() {

    	return view('godkiller');

    }
    public function longexile() {

    	return view('longexile');

    }
    public function akkord() {

    	return view('akkord');

    }
    public function leviathan() {

    	return view('leviathan');

    }
    public function fallenangel() {

    	return view('fallenangel');

    }
    public function demon() {

    	return view('fantasy-stuff');

    }
}
