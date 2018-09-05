@extends('template.template')


@section('conteudo') 
    
 
                <table class="table table-dark">
              <thead>            
                <tr>                  
                  <th scope="col"> Nome do Funcionario</th>
                  <th scope="col"> N° do cpf</th>
                  <th scope="col">Data de Nacimento</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Salario</th>
                  <th scope="col">caminhao</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Excluir</th>
                  <th scope="col">Desvincular</th>
                </tr>
              </thead>
                               
            
            @foreach($funcionarios as $funcionario) 
            
                <tr>      
                        
                  <td>{{$funcionario->nome}}</td>
                  <td>{{$funcionario->cpf}}</td>
                  <td>{{$funcionario->datadeNacimento}}</td>
                  <td>{{$funcionario->telefone}}</td>   
                  <td>{{$funcionario->salario}}</td>   
                  <td>
                     @if($funcionario->caminhao===null)
                           {{'Funcionário sem caminhão'}}
                          @else
                         {{$funcionario->caminhao->placa}}
                      @endif

                      <td>
                        <form  method="get" action="/funcionario/editar/{{$funcionario->id}}"> 
                          {{ csrf_field()}}                  
                          <button type="submit" class="btn btn-success">Editar</button>
                      </form>
                    </td>                                   
                      <td>
                        <form  method="post" action="/funcionario/excluir/{{$funcionario->id}}"> 
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>                  
                          <button type="submit" class="btn btn-danger">Excluir</button>
                      </form>                 
                      </td>
                      <td>
                        <form  method="get" action="/funcionario/desvincular/{{$funcionario->id}}"> 
                          {{ csrf_field()}}                  
                          <button type="submit" class="btn btn-warning">Desvincular</button>
                      </form>
                    </td> 
                    
                  </td>
                  
                
              
                  
            @endforeach        
                </table>

            @endsection