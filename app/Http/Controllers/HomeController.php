<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kraj;

class HomeController extends Controller
{
    public function index()
    {


        return view("index");

    }


    public function refreshCitiesDB()
    {

        $result = Kraj::where('Nazov',"Trenčiansky")->first();

        if(is_null($result)) {
            $kraj = new Kraj;


            $kraj->Nazov = "Trenčiansky";
            $kraj->save();
        }

    }
}
