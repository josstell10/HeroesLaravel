<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hero;
use App\enemy;

class BSController extends Controller
{
    public function index()
    {
        $hero = hero::find(2)->first();
        $enemy = enemy::find(1)->first();;
        $events = [];
        //sistema de batalla
        while ($hero->hp > 0 && $enemy->hp > 0){
            //ataque random partiendo de la suerte del hero
            $luck = random_int(0, 100);
            if ($luck >= 50 ){
                //ataque del hero
                $hp = $enemy->def - $hero->atq;
                //reducir vida del enemigo
                if ($hp < 0){
                    $enemy->hp -= $hp * -1;
                }
                //determinar quien gana
                if ($enemy->hp > 0 ){
                    $env = [
                        "Winner" => "Hero",
                        "Text" => $hero->name ." causo daño de " . $hero->atq . " a " . $enemy->name
                    ];
                }else{
                    $env = [
                        "Winner" => "Ganador " . $hero->name ,
                        "Text" => $hero->name ." acabo con " . $enemy->name
                    ];
                }
                //print("Enemy HP:" . $enemy->hp . "<br>");
            }else{
                //ataque del enemigo
                $hp = $hero->def - $enemy->atq;
                //reducir vida del hero
                if ($hp < 0){
                    $hero->hp -= $hp * -1;
                }
                //determinar quien gana
                if ($hero->hp > 0 ){
                    $env = [
                        "Winner" => "Enemigo",
                        "Text" => $enemy->name ." causo daño de " . $enemy->atq . " a " . $hero->name
                    ];
                }else{
                    $env = [
                        "Winner" => "Ganador " . $enemy->name ,
                        "Text" => $enemy->name ." acabo con " . $hero->name
                    ];
                }

                //print("Hero HP:" . $hero->hp . "<br>");
            }
            //pasar los eventos al array vacio de eventos
            array_push($events, $env);
        }
        //dd($events);
        return view('admin.bs.index',['events'=>$events]);

    }
}
