<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

     <!-- favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png">

    <title>JFL FINANCIAMENTOS</title>

   

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="../../assets/css/owl.css">

  <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/backtotop.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/owl.js"></script>
    <script src="../js/slick.js"></script>
    <script src="../js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>




  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Seg-Sex 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>55 035 99999-9999</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>JFL FINANCIAMENTOS</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../../index.html">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
          </div>
        </div>
      </nav>
    </header>

      <!-- start bem vindo-->
  <section class="jumbotron jumbotron-fluid p-2 no-margin text-light text-center">
    <div class="my-5 py-5">
      <p class="h1 text-center font-weight-bold text-light py-5 my-1 wow animate__animated animate__fadeInDown"> Rápido, fácil e confiável.</p>
    </div>
  </section>

  <?php
    $juros1 = 0;
    $montante1 = 0;
    $juros2 = 0;
    $montante2 = 0;
    $juros3 = 0;
    $montante3 = 0;

    if(isset($_POST['valor']) && isset($_POST['valor'])) {
      $preco = $_POST['valor'];
      $op = $_POST['taxa'];

      switch($op) {
        case $op == 'taxa1':

          $taxa = 0.098;
          $meses = 12;
           
          $juros1 = $preco * $taxa * $meses;
          $montante1 = $preco * (1 + ($taxa * $meses));
           
          break;

        case $op == 'taxa2':

          $taxa = 0.055;  
          $meses = 12;
         
          $montante1 = $preco * pow((1 + $taxa), $meses);
          $juros1 = $montante1 - $preco;

          break;

        case $op == 'taxa3':

          $taxa = 0.095;  
          $meses = 12;
         
          $montante2 = $preco * pow((1 + $taxa), $meses);
          $juros2 = $montante2 - $preco;
         
          break;

        case $op == 'taxa4':

          $taxa = 0.398;
          $meses = 12;
           
          $juros2 = $preco * $taxa * $meses;
          $montante2 = $preco * (1 + ($taxa * $meses));
           
          break;

        case $op == 'taxa5':

          $taxa = 0.0105;  
          $meses = 1;
         
          $montante3 = $preco * pow((1 + $taxa), $meses);
          $juros3 = $montante3 - $preco;
         
          break;

        case $op == 'taxa6':

          $taxa = 0.0058;
          $meses = 1;
           
          $juros3 = $preco * $taxa * $meses;
          $montante3 = $preco * (1 + ($taxa * $meses));
           
          break;
    }
  }
?>

  <!-- start simulacao -->
  <section class="container my-5 controle-fin2">
    <h2 class="text-uppercase text-center font-weight-bold textocontrole pb-5"><br>Simulação</h2>

    <ul class="nav nav-pills justify-content-center mb-4">
      <li class="nav-item"><a href="#nav-item-01" class="nav-link active m-2" data-toggle="pill">Automoveis</a></li>
      <li class="nav-item"><a href="#nav-item-02" class="nav-link m-2" data-toggle="pill" >Residencias</a></li>
      <li class="nav-item"><a href="#nav-item-03" class="nav-link m-2" data-toggle="pill">Crédito Pessoal</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active fade show pb-5" id="nav-item-01">
        <div class="row">
          <div class="col-md-6 embed-responsive-16by9">
            <form class="formulario" method="post"> 
        <p class="textosimulacao"> Faça sua simulação aqui.</p>
         <div class="field radiobox">
            <span class="textosimulacao">Escolha a taxa<br></span>
            <input type="radio" name="taxa" id="taxa" value="taxa1" checked><label for="taxa1" class="textosimulacao">Simples 0.98% a.a.</label><br>
            <input type="radio" name="taxa" id="taxa" value="taxa2"><label for="taxa2" class="textosimulacao">Completo 5.5% a.a</label>
        </div>
        <div class="field textosimulacao" >
            <label for="valor">Valor do Carro:</label>
            <input type="text" id="valor" name="valor" placeholder="Digite o valor">
        </div>       
     
        <input type="submit" name="acao" class="bg-info" value="Simular">
    </form>
          </div>
          <div class="col-md-6 textotaxas controle-fin text-justify">
            <h5><br><br><br><?php echo "O total de juros a ser pago é: " . $juros1 . "<br>";
        echo "O montante a ser pago é: " . $montante1; ?></h5>
          </div>
        </div>
      </div>

      <div class="tab-pane fade pb-5" id="nav-item-02">
        <div class="row">
          <div class="col-md-6 embed-responsive-16by9">
             <form class="formulario textoform" method="post"> 
        <h4 class="textosimulacao"> Faça sua simulação aqui.</h2>
         <div class="field radiobox textosimulacao">
            <span>Escolha a taxa?<br></span>
            <input type="radio" name="taxa" id="taxa" value="taxa3" checked><label for="taxa3">Simples 3.98% a.a.</label><br>
            <input type="radio" name="taxa" id="taxa" value="taxa4"><label for="taxa4">Completo 9.5% a.a</label>
        </div>
        <div class="field textosimulacao">
            <label for="valor">Valor do Casa:</label>
            <input type="text" id="valor" name="valor" placeholder="Digite o valor">
        </div>      

        <input type="submit" name="acao" class="bg-info" value="Simular">
    </form>
          </div>
          <div class="col-md-6 textotaxas controle-fin text-justify">
            <h5><br><br><br><?php echo "O total de juros a ser pago é: " . $juros2 . "<br>";
        echo "O montante a ser pago é: " . $montante2; ?></h5>
          </div>
        </div>
      </div>

      <div class="tab-pane fade pb-5" id="nav-item-03"> 
        <div class="row">
          <div class="col-md-6 embed-responsive-16by9">
             <form class="formulario textoform" method="post"> 
        <h4 class="textosimulacao"> Faça sua simulação aqui.</h2>
         <div class="field radiobox textosimulacao">
            <span>Escolha a taxa:<br></span>
            <input type="radio" name="taxa" id="taxa" value="taxa5" checked><label for="taxa5">Simples 0.58% a.m.</label><br>
            <input type="radio" name="taxa" id="taxa" value="taxa6"><label for="taxa6">Completo 1.5% a.m</label>
        </div>
        <div class="field textosimulacao">
            <label for="valor">Valor do Crédito:</label>
            <input type="text" id="valor" name="valor" placeholder="Digite o valor">
        </div>      

        <input type="submit" name="acao" class="bg-info" value="Simular">
    </form>
          </div>
          <div class="col-md-6 textotaxas controle-fin text-justify ">
            <h5><br><br><br><?php echo "O total de juros a ser pago é: " . $juros3 . "<br>";
        echo "O montante a ser pago é: " . $montante3; ?><br><br><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- start rodape -->
  <footer class="mt-5 mb-0 py-5 no-margin rodape">
    <div class="text-center text-dark">
      <p>&copy; JFL Company </p>
    </div>
  </footer>
</div>

  </body>
</html>