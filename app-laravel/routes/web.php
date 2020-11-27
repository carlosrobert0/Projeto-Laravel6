<?php

use Illuminate\Support\Facades\Route;

Route::get('products', 'ProductController@index')->name('products.index');

Route::get('/login', function () {
    return 'login';
})->name('login');

// Route::middleware([])->group(function () {
//     Route::prefix('admin')->group(function () {

//         Route::namespace('Admin')->group(function () {

//             Route::name('admin.')->group(function () {
//                 Route::get('/dashboard', 'TesteController@teste')->name('dasboard');

//                 Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

//                 Route::get('/produtos', 'TesteController@teste')->name('products');

//                 Route::get('/', 'TesteController@teste')->name('home');

//                 Route::get('/', function () {
//                     return redirect()->route('admin.dashboard');
//                 })->name('home');
//             });
//         });
//     });
// });

/*
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function () {
    Route::get('/dashboard', 'TesteController@teste')->name('dasboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('products');

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});

Route::get('redirect3', function () {
    return redirect().route('url.name');
});

Route::get('/nome-url', function () {
    return 'heyy hey hey';
})->name('url.name');

Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

Route::get('redirect1', function () {
    return redirect('/redirect2');
});

Route::get('redirect2', function () {
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}/details', function ($idProduct = '') {
    return "Produtos {$idProduct}";
});

Route::get('/categorias/{flag}/posts', function ($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::match(['post', 'get'], '/match', function() {
    return 'Match';
});

Route::any('/any', function() {
    return 'Any';
});

Route::get('/empresa', function () {
    return 'sobre a empresa';
});

Route::get('/contato', function () {
    return view('site.contact');
});

Route::get('/', function () {
    return view('welcome');
});
*/



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

