<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1;

class ClassController extends Controller
{
    public function index()
    {
    	$classes = Class1::all();
    	return view('classes.index', compact('classes'));
    }
}


