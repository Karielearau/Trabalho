@extends('template.template')


@section('conteudo') 

      
  
         @if (count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>            
        @endif


        <form action="/formCaminhao/cadastro" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>
                    <strong>Placa:</strong><input class="form-control" type="text" name="placa">
                </label>
            </div>

            <div class="form-group">
                <label><strong>Modelo:</strong><input class="form-control" type="text" name="modelo">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <strong>Marca</strong><input class="form-control" type="text" name="marca">
                </label>
            </div>
            <div class="form-group">
                <label>                       
                    <strong>Cor</strong> <input class="form-control" type="tel" name="cor">
                </label>
            </div>
            <div class="form-group">
                    <label>
                        <strong>Ano</strong> <input class="form-control" type="number" name="ano">
                    </label>
                </div>
                
            <div class="form-group">
                <label>
                    <strong>Renavan</strong> <input class="form-control" type="number" name="renavan">
                </label>
            </div>
            <button type="submit"  class="btn btn-primary">Cadastrar</button>


        </form>

       

        
        @endsection

