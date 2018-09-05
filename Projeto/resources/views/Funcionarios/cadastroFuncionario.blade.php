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

        <form action="/formFuncionario/cadastro" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>
                    <strong>Nome:</strong><input class="form-control" type="text" name="nome">
                </label>
            </div>

            <div class="form-group">
                <label><strong>Cpf:</strong><input class="form-control" type="text" name="cpf">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <strong>Data:</strong><input class="form-control" type="date" name="datadeNacimento">
                </label>
            </div>
            <div class="form-group">
                <label>                       
                    <strong>Telefone:</strong> <input class="form-control" type="tel" name="telefone">
                </label>
            </div>
            <div class="form-group">
                    <label>
                        <strong>Salario:</strong> <input class="form-control" type="number" name="salario">
                    </label>
                </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>


        </form>

       

    </div>


    @endsection