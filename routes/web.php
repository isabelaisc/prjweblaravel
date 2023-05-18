<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendamentoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/conexao', function () {
    return view('conexao');
});

Route::get('/dados', function() {
	$registro = new Agendamentos;
	$registro->nome = "Rodrigo Alves";
	$registro->telefone = "(11)98522-9966";
	$registro->origem = "Whatsapp";
	$registro->data_contato = "2023-03-28";
	$registro->observacao = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
	$registro->save();

	return view('dados');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
//listagem
Route::get('/agendamentos', [AgendamentoController::class, 'index'])->name('agendamentos.index');
// mostrar view de cadastro
Route::get('/agendamentos/create', [AgendamentoController::class, 'create'])->name('agendamentos.create');
// cadastrar usuário - mudança de método
Route::post('/agendamentos', [AgendamentoController::class, 'store'])->name('agendamentos.store');
// mostrar usuário no caso
Route::post('/agendamentos/{agendamento}', [AgendamentoController::class, 'show'])->name('agendamentos.show');
//atualizar
Route::post('/agendamentos/{agendamento}/edit', [AgendamentoController::class, 'edit'])->name('agendamentos.edit');
//
Route::post('/agendamentos/{agendamento}', [AgendamentoController::class, 'update'])->name('agendamentos.update');
//
Route::post('/agendamentos/{agendamento}', [AgendamentoController::class, 'destroy'])->name('agendamentos.destroy');
