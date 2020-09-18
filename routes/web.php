<?php

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Creating a new route 
Route::get('/catalogo/show', function() { 
    return view('catalogo.show'); 
});

Route::get('/catalogo/viatura', function() { 
    return view('catalogo.viatura'); 
});

Route::get('/pages/faq', function() { 
    return view('pages.faq'); 
}); 

Route::get('/pages/contacto', function() { 
    return view('pages.contacto'); 
}); 

Route::get('/pages/terms-condition', function() { 
    return view('pages.terms-condition'); 
}); 

Route::get('/pages/comingsoon', function() { 
    return view('pages.comingsoon'); 
}); 


//listagem de routes para implementacao midlleware admin- aula nr 20
//pagina de afmi
Route::get('/admin/index', function () {
    return view('admin.index');
});

//Categorias
Route::resource('admin/categorias','CategoriaController');

//modelos
Route::resource('admin/modelos','ModeloController');

//Fabricante
Route::resource('admin/fabricantes','FabricanteController');

//Seguradoras
Route::resource('admin/seguradoras','SeguradoraController');



