<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kraj;
use App\Obec;

class HomeController extends Controller
{
    public function index()
    {


        return view("index");

    }


    public function refreshCitiesDB()
    {
                for ($i = 0; $i <= 5; $i++) {

                $url = "http://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=".$i*500;
                $ch = curl_init();
                $timeout = 5;
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                $html = curl_exec($ch);
                curl_close($ch);

                # Create a DOM parser object
                $dom = new \DOMDocument();

                # Parse the HTML from Google.
                # The @ before the method call suppresses any warnings that
                # loadHTML might throw because of invalid HTML in the page.
                @$dom->loadHTML($html);

                # Iterate over all the <a> tags
                foreach($dom->getElementsByTagName('table') as $table)
                foreach($table->getElementsByTagName('a') as $link) {



                  $linkText=$link->getAttribute('href');
                  $isCity = strpos($linkText, 'obec');
                  if($isCity) {

                    $cityName=$link->nodeValue;

                       $result = Obec::where('Nazov','LIKE',"$cityName")->first();

                            if(is_null($result)) {
                                $obec = new Obec;


                                $obec->Nazov = "$cityName";
                                $obec->save();
                            }
                    echo "<br />";
                  # Show the <a href>
                  echo $link->getAttribute('href');
                  echo "<br />";
                    }
                }
}


    }
}
