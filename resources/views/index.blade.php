@extends("layouts.master")
@section("content")




        <h1 class="cover-heading">Search for a city</h1>


        <p>Hint:You can find all cities of Slovakia by entering their name in the search box above</p>
        <div id="appendPoint">

          <?php
          echo "<p>asdadsads</p>";
          ?>
          <?php
          ?>
        </div>




@stop

@section("search")
  {!! Form::open(['action' => ['SearchController@showCityInfo'], 'method' => 'GET']) !!}
  {!! Form::text('citySearchInput', '', ['id' =>  'citySearchInput', 'placeholder' =>  'Enter city name here...'])!!}
  {!! Form::submit('Ahoj')!!}
  {!! Form::close() !!}
@stop