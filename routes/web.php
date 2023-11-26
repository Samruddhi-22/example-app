<?php

use Illuminate\Support\Facades\Route;
use App\Models\Song;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies', function () {
    return view('veggies');
});
Route::get('/veggies/{veggieName}', function (string $veggieName) {
    return $veggieName;
})->whereIn('veggieName', ['baigan', 'bhindi', 'aaloo','gobhi','Baigan', 'Bhindi', 'Aaloo','Gobhi']);



/*Route::get('/songs_static', function () {
    $song1 = new Song();
    $song1->setTitle("Stan");
    $song1->setArtist("Eminem");
  
    $song2 = new Song();
    $song2->setTitle("Nothing Else Matters");
    $song2->setArtist("Metallica");
  
    $song3 = new Song();
    $song3->setTitle("With You");
    $song3->setArtist("A P Dhillon");
  
    return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
  });*/

  Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});

Route::get('/songs_static', function () {
    return view('songs_static');
});

Route::get('/playlists/{playlistId}', function (string $playlistId) {
    return view('playlist',[ 'songs' => Song::all() ,'playlistId'=>$playlistId] );
});
?>