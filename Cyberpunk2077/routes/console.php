<?php

use App\Personaggi;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('fillcyberpunk',function(){

    $personaggi=config("personaggi");

    foreach ($personaggi as $value) {
        
        $personaggi = new Personaggi;
       
        $personaggi ->src= $value['src'];
       $personaggi ->titolo = $value['titolo'];
       $personaggi ->tipo = $value['tipo'];
       $personaggi ->descrizione = $value['descrizione'];
      
       $personaggi -> save();
       
    }

})->describe('Fill db from config data');
