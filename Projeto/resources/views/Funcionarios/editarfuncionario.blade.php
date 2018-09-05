@extends('template.template')


@section('conteudo') 


    <div class="container">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>            
            @endif

        <form action="/Funcionario/editar" method="post">
            <input name="id" value="{{$funcionario->id}}" type="hidden"/>
            {{ csrf_field() }}
            <div class="form-group">
                <label>
                <strong>Nome:</strong><input class="form-control" type="text" name="nome" value="{{$funcionario->nome}}">
                </label>
            </div>

            <div class="form-group">
                <label><strong>Cpf:</strong><input class="form-control" type="text" name="cpf" value="{{$funcionario->cpf}}">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <strong>Data:</strong><input class="form-control" type="date" name="datadeNacimento"value="{{$funcionario->datadeNacimento}}">
                </label>
            </div>
            <div class="form-group">
                <label>                       
                    <strong>Telefone:</strong> <input class="form-control" type="tel" name="telefone"value="{{$funcionario->telefone}}">
                </label>
            </div>
            <div class="form-group">
                    <label>
                        <strong>Salario:</strong> <input class="form-control" type="number" name="salario"value="{{$funcionario->salario}}">
                    </label>
                </div>
            <button type="submit" class="btn btn-primary">Editar</button>


        </form>

       

    </div>


    @endsection