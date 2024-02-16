<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
   
    private $name;
    private $age;
    private $funcionReferee;

    function putRed($numPlayer){
        return("Red for player" + $numPlayer);
    }
        
}
