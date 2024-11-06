<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

use App\Models\Contato;
use App\Http\Controllers\ProdutosController;
use App\Models\Produto;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/cadastrar', [ContatoController::class, 'index']); // Altere para 'ContatoController'
Route::post('/cadastrar-contato', [ContatoController::class, 'store']); // Altere para 
Route::get('/cadastrar-contato', [ContatoController::class, 'create']); // Altere para '
Route::get('/editar-contato/{id_do_contato}', [ContatoController::class, 'edit']); // Altere 
Route::post('/atualizar-contato/{id_do_contato}', [ContatoController::class, 'update']); // 
Route::get('/deletar-contato/{id_do_contato}', [ContatoController::class, 'destroy']); // Altere 
Route::get('/listar-contatos', [ContatoController::class, 'show']); // Altere para 
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/listar-contatos', [ContatoController::class, 'show'])->name('listar-contatos');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('pagina_inicial');
Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}', [ProdutosController::class, 'show'])->name('mostrar_produto');
Route::get('/produtos/editar/{id}', [ProdutosController::class, 'edit']);
Route::post('/produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'delete']);
Route::post('/produtos/excluir/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');