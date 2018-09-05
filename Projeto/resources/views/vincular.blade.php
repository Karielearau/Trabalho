@extends('template.template')


@section('conteudo') 
<h1>Escolha o funcionario e o caminhão a ser associado</h1>
    <form action="/vinculo" method="post"> 
            {{ csrf_field() }}
        <div class="row">
        <div class="col-md-5 form-group">
          <label for="exampleFormControlSelect1">Escolha o funcionario</label>
          <select name="id_fun" class="form-control">
                @foreach($funcionarios as $funcionario) 
                @if($funcionario->caminhao==null)
                <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>                
                @endif        
                @endforeach    
          </select>
        </div>


        <div class="col-md-5 form-group">
                <label for="exampleFormControlSelect1">Escolha o Caminhão</label>
                <select name="id_cam" class="form-control">
                      @foreach($caminhoes as $caminhao) 
                      @if($caminhao->funcionario==null)
                      <option value="{{$caminhao->id}}">{{$caminhao->placa}}</option>                       
                     @endif 
                      @endforeach    
                </select>
              </div>      
    </div>
    <button type="submit" class="btn btn-primary">Vincular</button>
    </form>
        
   
    
@endsection