<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kraj extends Model
{
    //nieco o vazbach n ku n, 1 ku n
    protected $table = "Kraj";  //malym a mnozne
    protected $fillable = ["Nazov"];
}
?>