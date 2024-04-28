<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;



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
    // we use  Post::all() for retrieving all the posts form the Database 
    // $posts = Post::all(); 

    //we use Post::where('user_id', auth()->id())->get() 
    //to retrieve data from data base related to that user 

    $posts = Post::where('user_id', auth()->id())->get();



    return view('home' , ['posts' => $posts] );

});

Route::post('/register',[UserController::class, 'register' ]);
Route::post('/logout', [UserController::class , 'logout']); 
Route::post('/login', [UserController::class, 'login']);

// this route for the blog posts

Route::post('/create-post', [PostController::class, 'createPost']);


Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);

// we use PUT instead of get in order to update in the same URl
Route::put('/edit-post/{post}', [PostController::class, 'acuallyUpdatePost']);

Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);