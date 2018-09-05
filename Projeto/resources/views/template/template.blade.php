<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="stylesheet" type="text/css" href="/css/template.css">
  <title>Document</title>

</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/home">Home</a>
              </li>
          <li class="nav-item ">
            <a class="nav-link" href="/formFuncionario">Cadastrar Funcionário<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/formFuncionario/listagem">Listar Funcionários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/formCaminhao">Cadastrar Caminhões</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/formCaminhao/listagem">Listar Caminhões</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/vincular">Vincular</a>
          </li>
        </ul>       
      </div>
    </nav>

<div class="cabecalho">
    <div class="text-center">
        <h3>Siga Bem Caminhoneiro</h3>
 <nav class="logo"></nav>


 <img id="myImg" src="{{ URL::to('/img/222.jpg') }}">

    </div>
</div>



    @yield('conteudo') 
    
    
   <div class="card-group">
  <div class="card">
    <img class="card-img-top"  src="{{ URL::to('/img/accelo.jpg') }} alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mercedes Accelo</h5>
      <p class="card-text">Na versão 1316, que chega a 13 toneladas de PBT, o 3º eixo já vem instalado de fábrica e possibilita a instalação de carroçaria de até 8 metros, a maior do seu segmento!</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> 
   <nav class="footer">Todos direitos autoriais reservados.</nav>

  </div>

</body>

</html>