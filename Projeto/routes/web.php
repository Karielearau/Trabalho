<?php

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



//-------------------rotas de crud funcionario---------------

Route::get('/formFuncionario', 'funcionarioController@forCadasFunc');
Route::post('/formFuncionario/cadastro', 'funcionarioController@CadasFunc');
Route::get('/formFuncionario/listagem', 'funcionarioController@listFunc');
Route::delete('/funcionario/excluir/{id}','funcionarioController@excluirfuncionario');
Route::get('/funcionario/editar/{id}','funcionarioController@formEditarfuncionario');
Route::post('/Funcionario/editar', 'funcionarioController@funcionarioEditar');


//-------------------rotas de crud caminhão---------------

Route::get('/formCaminhao', 'caminhaoController@forCadasCamin');
Route::post('/formCaminhao/cadastro', 'caminhaoController@CadasCamin');
Route::get('/formCaminhao/listagem', 'caminhaoController@listCamin');
Route::delete('/caminhao/excluir/{id}','caminhaoController@excluircaminhao');
Route::get('/caminhao/editar/{id}','caminhaoController@formEditarCaminhao');
Route::post('/Caminhao/editar', 'caminhaoController@caminhaoEditar');

//-----------------------------------rota de vinculo--------------------

Route::get('/vincular', 'funcionarioController@forVincular');
Route::post('/vinculo', 'funcionarioController@vinculo');
Route::get('/caminhao/desvincular/{id}', 'caminhaoController@Caminhaodesvincular');
Route::get('/funcionario/desvincular/{id}', 'funcionarioController@funcionariodesvincular');



//---------------------------------rota home-------------

Route::get('/home', 'Controller@frmhome');