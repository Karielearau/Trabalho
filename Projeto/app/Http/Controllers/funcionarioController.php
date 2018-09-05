<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\formFuncionarioRequest;
use App\Caminhao;

class funcionarioController extends Controller
{
    function forCadasFunc()
    {
        return view('Funcionarios\cadastroFuncionario');
    }

    function CadasFunc(formFuncionarioRequest $request)
    {
        $params = $request->all();
        Funcionario::create($params);
        return redirect()->action("funcionarioController@forCadasFunc");
    }

    function listFunc()
    {
        $funcionarios = Funcionario::all();
        return view("Funcionarios\listarfuncionario")->with("funcionarios", $funcionarios);
    }




    function excluirfuncionario(request $request)
    {

        $funcionario = funcionario::find($request->id);
        if ($funcionario->caminhao != null) {
            $funcionario->caminhao_id = null;
            $funcionario->save();
            $funcionario->delete();
        } else {
            $funcionario->delete();
        }
        return redirect()->action("funcionarioController@listFunc");
    }


        //------------------------------------//---------------------------


    function forVincular()
    {
        $funcionarios = Funcionario::all();
        $caminhoes = Caminhao::all();

        return view('vincular')->with("funcionarios", $funcionarios)->with("caminhoes", $caminhoes);
    }




    function vinculo(request $request)
    {
        $funcionario = Funcionario::find($request->id_fun);
        $caminhao = Caminhao::find($request->id_cam);
        $funcionario->caminhao_id = $caminhao->id;
        $funcionario->save();
        return redirect()->action("funcionarioController@forVincular");
    }

    public function funcionariodesvincular(request $request)
    {
        $funcionario = Funcionario::find($request->id);
        if ($funcionario->caminhao != null) {
            $funcionario->caminhao_id = null;
            $funcionario->save();
        }
        return redirect()->action("funcionarioController@listFunc");
    }

    public function formEditarfuncionario(request $request) 
    {
        $funcionario = funcionario::find($request->id);
        return view("Funcionarios/editarfuncionario")->with("funcionario", $funcionario);    
    }

    public function funcionarioEditar(formFuncionarioRequest $request) 
    {              
       $funcionario= funcionario::find($request->id);
        $funcionario->update($request->all());
       return redirect()->action("funcionarioController@listFunc");
    }
   

}
