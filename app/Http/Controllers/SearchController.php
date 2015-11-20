<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function autocomplete(){

        $term = Input::get('term');

        $results = array();

        $queries = DB::table('Obec')
            ->where('Nazov', 'like', '%'.''.$term.''.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'ID' => $query->ID, 'value' => $query->Nazov];
        }
        return Response::json($results);
    }

    public function showCityInfo(){

            $term = Input::get('citySearchInput');

            $results = array();

            $queries = DB::table('Obec')
                ->where('Nazov',$term)
                ->take(5)->get();

            foreach ($queries as $query)
            {
                $results[] = [ 'ID' => $query->ID, 'value' => $query->Nazov];
            }
            return Response::json($results);
        }
}
