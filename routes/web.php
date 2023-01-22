<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $directors = \App\Models\Director::all();

    foreach($directors as $director){
        echo 'Director name: '.$director['name'].'<br>';
        echo 'Film: '.$director->film['name'].'<br>';
        echo '-------------------------------'.'<br>';
    }

});

Route::get('film', function () {
    $films = \App\Models\Film::all();

    foreach($films as $film){
        echo 'Film name: '.$film['name'].'<br>';
        echo 'Director: '.$film->director['name'].'<br>';
        echo '-------------------------------'.'<br>';
    }

});

Route::get('author', function () {
    $authors = \App\Models\Author::all();

    foreach($authors as $author){
        echo 'Author name:'.$author['name'].'<br>';
        echo '<b> Author\'s books: </b>';
        foreach ($author->books as $book){
             echo $book['title'].'<br>';
        }
        echo '-------------------------------'.'<br>';
    }

});
