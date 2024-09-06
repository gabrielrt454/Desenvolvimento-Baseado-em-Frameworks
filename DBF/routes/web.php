<?php
//Segundo a decorar
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExemploController;

// Importante para a prova
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!                  
|
*/

    Route::get('/', function () {
    return view('welcome');
});
//Route::get('/exemplo', function () {
//    return view('exemplo');
//});
Route::get('/alunos',[App\Http\Controllers\AlunoController::class,'listar']);
Route::get('/alunos/{id}',[App\Http\Controllers\AlunoController::class,'listarId']);



Route::get('novoAluno',[App\Http\Controllers\AlunoController::class,'criar']); // esta relacionada com esta parte
                                                                    //é o nome d função que está no aluno controller
Route::post('salvarAluno',[App\Http\Controllers\AlunoController::class,'store'])->name('alunos.salvar');
Route::post('atualizarAluno', [App\Http\Controllers\AlunoController::class, 'update'])
    ->name('alunos.atualizar');
