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

        $queries = DB::table('Kraj')
            ->where('Nazov', 'LIKE', '%'.$term.'%')
          //  ->orWhere('last_name', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'ID' => $query->ID, 'value' => $query->Nazov];
        }
        return Response::json($results);
    }
}
