 <?php 
	require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Список сборщиков</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
	 <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
      <ul class="navbar-nav">
        <li class="nav-item">
             <a class="nav-link" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#vid">Список видов продукции</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uchet.php" tabindex="-1" aria-disabled="true">Журнал учета урожая</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Список сборщиков</a>
          <div class="dropdown-menu" aria-labelledby="dropdown10">
            <a class="dropdown-item" href="brigada.php#b1">Бригада 1</a>
            <a class="dropdown-item" href="brigada.php#b2">Бригада 2</a>
          </div>
        </li>
           <?php 
          if ( isset ($_SESSION['logged_user']) )
          {}
              else
              {
          echo'<li class="nav-item"><a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Авторизация</a></li>';
              }
        if ( isset ($_SESSION['logged_user']) )
        {}
          else
          {
              echo'<li class="nav-item"><a class="nav-link" href="signup.php" tabindex="-1" aria-disabled="true">Регистрация</a></li>';
          }
           if ( isset ($_SESSION['logged_user']) )
          {
       
               echo '<li class="nav-item"><a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Выйти</a></li>';
          }
          else
          {
                echo '<li class="nav-item"><a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Войти</a></li>';
          }
          ?>
            </ul>
    </div>
  </nav>
  </header>
      <?php if ( isset ($_SESSION['logged_user']) ) :?>
	   Привет, <?php echo $_SESSION['logged_user']->login;?>!
       Дата регистрации: <?php echo $_SESSION['logged_user']->datetime;?>.
       <?php else : ?>
       Вы не авторизованы<br/>
       <?php endif; ?>

<div class="container pt-5 my-5 z-depth-1" id="b1">
  <section class="p-md-3 mx-md-5 text-lg-left">
    <h2 class="text-center font-weight-bold mb-4 pb-1">Первая бригада</h2>
    <p class="text-center lead mb-5 pb-2 text-muted">Состав бригады</p>
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="media/shrek.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Шрек Болотов</h6>
            <p class="text-muted">
              Главный бригадир
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="media/alex.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Фиона Болотова</h6>
            <p class="text-muted">
              Комбайнер
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="media/mike01.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Майк вазовски</h6>
            <p class="text-muted">
              Сборщик урожая
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="media/sally.png"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Иван Иванов</h6>
            <p class="text-muted">
              Сборщик урожая
            </p>
          </div>
        </div>
      </div>
      
  </section>
</div>
<div class="container pt-5 my-5 z-depth-1" id="b2">
  <section class="p-md-3 mx-md-5 text-lg-left">
    <h2 class="text-center font-weight-bold mb-4 pb-1">Бригада 2</h2>
    <p class="text-center lead mb-5 pb-2 text-muted">Состав бригады</p>
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Alan Turing</h6>
            <p class="text-muted">
              Software Engineer
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Tom Johnson</h6>
            <p class="text-muted">
              Designer
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="media/cucumber.jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Alax Laurie</h6>
            <p class="text-muted">
              JavaScript Developer
            </p>
          </div>
        </div>
      </div>
    
          
  </section>
</div>
  <!-- FOOTER -->
<footer class="footer mt-auto py-3">
  <div class="container">
    <div class="row mb-3 justify-content-md-center">
    <a href="index.html" class="text-muted">Главная</a>
    <div class="col-1"><a href="#top" class="text-muted">Наверх</a></div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
