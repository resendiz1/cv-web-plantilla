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
// Route::view('detallePortafolio', 'detallePortafolio')->name('detallePortafolio');
|
*/

Route::view('/','home')->name('home');

Route::view('about','about')->name('about');
Route::view('contacto', 'contacto')->name('contacto');
Route::view('experiencia', 'experiencia')->name('experiencia');
Route::view('login','auth/passwords/login')->name('login');
Route::view('login','/password/reset')->name('login');
Route::view('skills','skills')->name('skills');


Route::get('portafolio','ProjectControlador@index')->name('project.index');
Route::get('portafolio/crear','ProjectControlador@create')->name('project.create');
Route::get('portafolio/{proyecto}/editar','ProjectControlador@edit')->name('project.edit');
Route::patch('portafolio/{proyecto}/','ProjectControlador@update')->name('project.update');
Route::delete('portafolio/{proyecto}/','ProjectControlador@destroy')->name('project.destroy');
Route::post('portafolio/crear','ProjectControlador@store')->name('project.store');
Route::get('portafolio/{proyecto}', 'ProjectControlador@show')->name('project.show');





Route::post('contacto','MensajeContacto@store');



Auth::routes(['register' => false,
              '/password/reset' => false ]);

