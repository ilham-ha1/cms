<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;

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

//Practicum 1
// Route::get('/', function () {
//     echo "Hi! Welcome To Laravel";
// });
// Route::get('/about', function(){
//     echo "Muhammad Ilham El Hakim <br>";
//     echo "2041720162 <br>";
//     echo "TI-2I";
// });
// Route::get('/articles/{id}', function($id){
//     echo "This is Article Pages with ID: ".$id;
// });
//Practicum 2
// Route::get('/',[PageController::class, 'index']);
// Route::get('/about',[PageController::class,'about']);
// Route::get('/articles/{id}',[PageController::class,'articles']);

// Route::get('/',[HomeController::class, 'index']);
// Route::get('/about',[AboutController::class,'about']);
// Route::get('/articles/{id}',[ArticleController::class,'articles']);

// Route::prefix('category')->group(function(){
//     Route::get('/marbel-edu-games', function(){
//         echo "This is marbel-edu games page";
//     });
// });

// Route::get('/', function(){
//     return view('home');
// });

// Route::get('about-us', function(){
//     return view('about');
// });

// //belum
// Route::prefix('category')->group(function(){
//     Route::get('/marbel-edu-games', function(){
//         return view ('category.marbel-edu-games');
//     });
//     Route::get('/marbel-and-friends-kids-games', function(){
//         return view ('category.marbel-and-friends-kids-games');
//     });
//     Route::get('/riri-story-books', function(){
//         return view ('category.riri-story-books');
//     });
//     Route::get('/kolak-kids-songs', function(){
//         return view ('category.kolak-kids-songs');
//     });

// });

// Route::prefix('news')->group(function(){
//     Route::get('/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19', function(){
//         echo "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19 ";
//     });
//     Route::get('/', function(){
//         echo "news ";
//     });
// });

// Route::prefix('program')->group(function(){
//     Route::get('/karir', function(){
//         return view ('program.karir');
//     });
//     Route::get('/magang', function(){
//         return view ('program.magang');
//     });
//     Route::get('/kunjungan-industri', function(){
//         return view ('program.kunjungan-industri');
//     });
// });


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/', [PostController::class,'login']);

 Route::get('/support', function(){
    return view('support');
});
Route::get('/account', function(){
    return view('account');
});
Route::get('/store', function(){
    return view('store');
});
Route::get('/contact', function(){
    return view('contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articles', ArticleController::class);
