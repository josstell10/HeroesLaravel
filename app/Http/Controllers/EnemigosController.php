<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnemigosController extends Controller
{
    public function index()
    {
    	return view('admin.enemigos.index');
    }
}
