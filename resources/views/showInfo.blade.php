@extends("layouts.master")
@section("content")




    <h1 class="cover-heading">Search for a city</h1>

    <!--
<div class="ui-widget">
<label for="citySearchInput"> </label>

<input id="citySearchInput" placeholder="Enter city name here..."  >

<a href="#" class="btn btn-lg1 btn-default">Search</a>
</div>
-->
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
    {!! Form::open(['action' => ['SearchController@autocomplete'], 'method' => 'GET']) !!}
    {!! Form::text('citySearchInput', '', ['id' =>  'citySearchInput', 'placeholder' =>  'Enter city name here...'])!!}
    {!! Form::submit('Ahojasdas')!!}

    <a href="/showInfo"> {!! Form::button('Search', array('class' => 'button expand')) !!} </a>
    {!! Form::close() !!}
@stop
@section("results")

     @foreach($data as $mesto )

            {!! $mesto->ID  !!};
    @endforeach

@stop
