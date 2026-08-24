<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
    return "<h1>Available jobs</h1>";
})->name('jobs.index');

Route::get('/posts/{id}', function($id) {
    return 'Post ' . $id;
})->where('id', '[0-9]+');

Route::get('/posts/{id}/comments/{commentid}', function($id, $commentid) {
    return "<h1>Post id " . $id . ", comment id " . $commentid;
});
// Route::post('/submit', function(){
//     return "Submitted";
// }); 

// Route::match(['get', 'post'], '/submit', function() {
//     return 'Submitted';
// });

// Route::get('/test', function(){
//     $url = route('jobs.index');
//     return "<a href='$url'>Click Here</a>";
// });

// Route::get('/api/users', function() {
//     return [
//        'name' => 'Mabvuto Phiri',
//        'email' => 'mphiri@gmail.com' 
//     ];
// });