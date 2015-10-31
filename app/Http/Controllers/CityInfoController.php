<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kraj;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class CityInfoController extends Controller
{
    public function index()
{
    $data = array();

    $data[] =54;
  echo      DB::table('Kraj')
       ->where('Nazov', '=', '%'.Input::get("a").'%')->toSql();

    return View::make('showInfo', compact('data'));
}
}
