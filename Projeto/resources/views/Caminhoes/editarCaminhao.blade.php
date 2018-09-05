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


        <form action="/Caminhao/editar" method="post">
            {{ csrf_field()}}  
            <input name="id" value="{{$caminhao->id}}" type="hidden"/>         
            <div class="form-group">
                <label>
                <strong>Placa:</strong><input class="form-control" type="text" name="placa" value="{{$caminhao->placa}}">
                </label>
            </div>

            <div class="form-group">
                <label><strong>Modelo:</strong><input class="form-control" type="text" name="modelo" value="{{$caminhao->modelo}}">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <strong>Marca</strong><input class="form-control" type="text" name="marca" value="{{$caminhao->marca}}">
                </label>
            </div>
            <div class="form-group">
                <label>                       
                    <strong>Cor</strong> <input class="form-control" type="tel" name="cor" value="{{$caminhao->cor}}">
                </label>
            </div>
            <div class="form-group">
                    <label>
                        <strong>Ano</strong> <input class="form-control" type="number" name="ano"value="{{$caminhao->ano}}">
                    </label>
                </div>
                
            <div class="form-group">
                <label>
                    <strong>Renavan</strong> <input class="form-control" type="number" name="renavan"value="{{$caminhao->renavan}}">
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>


        </form>

       

        
        @endsection