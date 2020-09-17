<?php
include("./conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172410912-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-172410912-1');
  </script>

  <title>Brasil Noticias - Negócios</title>
  <link rel="shortcut icon" href="./img/brasil.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
  <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
  <link rel="stylesheet" href="./index.css">
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>

  <div id="primar" class="jumbotron text-center" style="margin-bottom:0">
    <h1 class="titulo">Brasil Notícias</h1>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="./index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="./negocios.php">Negócios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./entretenimento.php">Entretenimento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./saude.php">Saúde</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./ciencia.php">Ciências</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./esporte.php">Esporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./tecnologia.php">Tecnologia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./biticoin.php">Biticoin</a>
        </li>
      </ul>
    </div>
  </nav>

  <div style="margin-top:30px; margin-left:10px; margin-right:10px">
    <div class="row">
      <div class="col-sm-8">
        <?php
        foreach ($NewsData2->articles as $News) {
        ?>
          <div class="card">
            <div class="alert alert-info">
              <h2 style="text-align: left;"><?php echo $News->title ?></h2>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <h5><?php echo $News->description ?></h5>
              </li>
              <li class="list-group-item">
                <div><a href="<?php echo $News->url ?>"><img width="100%" height="auto" src="<?php echo $News->urlToImage ?>" alt="News thumbnail"></a></div>
              </li>
              <li class="list-group-item">
                <p><?php echo $News->publishedAt ?></p>
              </li>
              <li class="list-group-item">
                <p><?php echo $News->content ?></p>
              </li>
            </ul>
            <a href="<?php echo $News->url ?>" class="btn btn-primary">Mais sobre ...</a>
          </div>
          <br>
        <?php
        }
        ?>
      </div>

      <div class="col-sm-4">
        <!-- <h2>About Me</h2>
        <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
        <h5>Photo of me:</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        <h3>Some Links</h3>
        <p>Lorem ipsum dolor sit ame.</p> -->
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./negocios.php">Negócios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./entretenimento.php">Entretenimento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./saude.php">Saúde</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ciencia.php">Ciências</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./esporte.php">Esporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./tecnologia.php">Tecnologia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./biticoin.php">Biticoin</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>


    </div>
  </div>

  <?php
  include("./footer.php");
  ?>


  <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>

</body>

</html>