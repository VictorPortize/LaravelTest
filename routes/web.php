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
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;


Route::get('/',HomeController::class);

Route::view('/test','test');



Route::prefix('/tarefas')->group(function(){
    
    Route::get('/',[TarefasController::class,'list']);

    Route::get('add',[TarefasController::class,'add']);
    Route::post('add',[TarefasController::class,'addAction']);
    
    Route::get('/edit/{id}',[TarefasController::class,'edit']);
    Route::post('/edit/{id}',[TarefasController::class,'editAction']);

    Route::post('/delete/{id}',[TarefasController::class,'del']);

    Route::get('marcar/{id}',[TarefasController::class,'done']);

});

Route::prefix('/config')->group(function(){

    Route::get('/',[ConfigController::class, 'index']);
    Route::post('/',[ConfigController::class, 'index']);
    Route::get('/info',[ConfigController::class, 'info']);
    Route::get('/permissoes',[ConfigController::class, 'permissoes']);

});

Route::fallback(function(){
    return view('404');
});
