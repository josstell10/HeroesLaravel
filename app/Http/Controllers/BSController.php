<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hero;
use App\enemy;

class BSController extends Controller
{
    public function index()
    {
        dd($this->manualBattle(2,1));
        return view('admin.bs.index', $this->autoBattle(2,1));
    }

    //pelea automatica
    public function autoBattle($heroId, $enemyId){
        //modelo de hero y enemy
        $hero = hero::find($heroId);
        $enemy = enemy::find($enemyId);
        //dd($hero->level);

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
                        "Text" => $hero->name ." acabo con " . $enemy->name ." Y gano ". $enemy->xp . " de Experiencia."
                    ];
                    //aumentar experiencia al Heroe y aumentar de nivel
                    $hero->xp = $hero->xp + $enemy->xp;
                    if ($hero->xp >= $hero->level->xp){
                        $hero->xp = 0;
                        $hero->level_id += 1;
                    }
                    $hero->save();
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
        return ['events'=>$events, 'HeroName'=>$hero->name, 'EnemyName'=>$enemy->name];
    }

    public function manualBattle($heroId, $enemyId){
        //modelo de hero y enemy
        $hero = hero::find($heroId);
        $enemy = enemy::find($enemyId);
        //dd($hero->level);

        //ataque random partiendo de la suerte del hero
        $luck = random_int(0, 100);
        if ($luck > 50 ) {
            //ataque del hero
            $hp = $enemy->def - $hero->atq;
            //reducir vida del enemigo
            if ($hp < 0) {
                $enemy->hp -= $hp * -1;
            }
            //determinar quien gana
            if ($enemy->hp > 0) {
                return [
                    "Winner" => "Hero",
                    "Text" => $hero->name . " causo daño de " . $hero->atq . " a " . $enemy->name
                ];
            } else {
                return [
                    "Winner" => "Ganador " . $enemy->name ,
                    "Text" => $enemy->name ." acabo con " . $hero->name
                ];
                //aumentar experiencia al Heroe y aumentar de nivel
                $hero->xp = $hero->xp + $enemy->xp;
                if ($hero->xp >= $hero->level->xp){
                    $hero->xp = 0;
                    $hero->level_id += 1;
                }
                $hero->save();
            }
        }else{
            //ataque del enemigo
            $hp = $hero->def - $enemy->atq;
            //reducir vida del hero
            if ($hp < 0){
                $hero->hp -= $hp * -1;
            }
            //determinar quien gana
            if ($hero->hp > 0 ){
                return [
                    "Winner" => "Enemigo",
                    "Text" => $enemy->name ." causo daño de " . $enemy->atq . " a " . $hero->name
                ];
            }else{
                return [
                    "Winner" => "Ganador " . $enemy->name ,
                    "Text" => $enemy->name ." acabo con " . $hero->name
                ];
            }
        }
    }
}
