<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class;

class ClassController extends Controller
{
    public function index()
    {
    	$classes = Class::all();
    	return view('classes.index', compact('classes'));
    }
}
