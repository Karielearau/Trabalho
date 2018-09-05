@extends('template.template')


@section('conteudo') 
        
                <table class="table table-dark">
              <thead>            
                <tr>               
                         
                           
                  <th scope="col">placa</th>
                  <th scope="col">modelo</th>
                  <th scope="col">marca</th>
                  <th scope="col">cor</th>
                  <th scope="col">ano</th>
                  <th scope="col">renavan </th>
                  <th scope="col">funcionario </th>
                  <th scope="col">Editar</th>
                  <th scope="col">Excluir</th>
                  <th scope="col">Desvincular</th>
                </tr>
              </thead>
                               
            
            @foreach($caminhoes as $caminhao) 
            
                <tr>      
                        
                  <td>{{$caminhao->placa}}</td>
                  <td>{{$caminhao->modelo}}</td>
                  <td>{{$caminhao->marca}}</td>
                  <td>{{$caminhao->cor}}</td>   
                  <td>{{$caminhao->ano}}</td>   
                  <td>{{$caminhao->renavan}}</td>
                <td>@if($caminhao->funcionario===null)
                  {{'nenhum funcionário'}}
                  @else
                  {{$caminhao->funcionario->nome}}
                  @endif
                </td> 
                <td>
                  <form  method="get" action="/caminhao/editar/{{$caminhao->id}}"> 
                    {{ csrf_field()}}                  
                    <button type="submit" class="btn btn-success">Editar</button>
                </form>
              </td>                                   
                <td>
                  <form  method="post" action="/caminhao/excluir/{{$caminhao->id}}"> 
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>                  
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>                 
                </td>
                <td>
                  <form  method="get" action="/caminhao/desvincular/{{$caminhao->id}}"> 
                    {{ csrf_field()}}                  
                    <button type="submit" class="btn btn-warning">Desvincular</button>
                </form>
              </td> 
                           
                  </tr>
                  
            @endforeach                      
                </table>
            @endsection          
                         

