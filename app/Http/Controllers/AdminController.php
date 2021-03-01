<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hero;
use App\item;
use App\enemy;

class AdminController extends Controller
{
    public function index()
    {
        $heroCount = hero::count();
        $itemCount = item::count();
        $enemyCount = enemy::count();
    	$list = [
    	    ['name'=>'Heroes', 'counter'=> $heroCount, 'route'=> 'admin.heroes.index'],
            ['name'=>'Items', 'counter'=> $itemCount, 'route'=> 'items.index'],
            ['name'=>'Enemigos', 'counter'=> $enemyCount, 'route'=> 'enemys.index']
        ];

    	return view('admin.index', ['list'=>$list]);
    }
}
