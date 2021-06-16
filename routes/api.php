<?php

use App\Http\Controllers\PostController;
use App\Models\Photo as ModelPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Guid\Guid;
use App\Models\Post as PostModel;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/photo', function(){
//     $guid = "asdfghjkl";

//     $photo = ModelPhoto::create([
//         'photo_title'=>'first-signed-photo',
//         'unique_name'=> $guid,
//         'likes'=> 10,
//         'view' => 100
//     ]);

//     return $photo;
// });


// Route::get('/posts', function(){
//    $create =  PostModel::create(['title'=> 'second post', 'signature'=>'second signed post']);
//     return $create;
// });

Route::resource('posts', PostController::class);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
