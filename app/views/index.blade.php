@extends('master')

@section('content')

<div class="container">
            This is a list of Movies
        </div>
        
        <?php 
//            Util::getMovieInfo('biwi no 1');
//            Util::getMovieInfo('godfather');
//            Util::getMovieInfo('terminator');
//            Util::getMovieInfo('andaz apna apna');
            
Movies::addMovie("tt0100095");
        
            //echo constant('MY_PATH');
        ?>

@endsection