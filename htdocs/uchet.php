 <?php 
	require 'db.php';
?>
       
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Журнал учета</title>

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
        </li>
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

<main role="main">
<div class="container">
  <br>
  <h1>Журнал учета урожая</h1>
  <br>

  <div class="row mb-3">
    <div class="col-2 themedbl-grid-col"><b>Месяц</b></div>
    <div class="col-2 themedbl-grid-col"><b>Общее кол-во урожая</b></div>
    <div class="col-3 themedbl-grid-col"><b>Томатов </b></div>
    <div class="col-2 themedbl-grid-col"><b>Огурцов</b></div>
    <div class="col-3 themedbl-grid-col"><b>Перцев</b></div>
  </div>
  
  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Январь</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

    <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Февраль</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

   <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Март</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Апрель</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Май</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Июнь</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>


  
  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Июль</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>


  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Август</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Сентябрь</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Октябрь</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Ноябрь</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  <div class="row mb-3">
    <div class="col-2 themed-grid-col"><h5>Декабрь</h5></div>
    <div class="col-2 themed-grid-col">100 ц.</div>
    <div class="col-3 themed-grid-col">33 ц.</div>
    <div class="col-2 themed-grid-col">33 ц.</div>
    <div class="col-3 themed-grid-col">34 ц.</div>
  </div>

  </div>
  <div class="container my-5 py-5 z-depth-1 text-center text-lg-left">


    <section class="px-md-5 mx-md-5 dark-grey-text">

      <div class="row">

        <div class="col-lg-6 mb-4">

          <img src="media/logo.png" class="img-fluid mb-5"
            alt="">

          <h3 class="font-weight-bold">Сбор урожая</h3>

          <p class="text-muted">Следует учитывать готовность съедобных частей зеленных и пряных растений, степень зрелости – техническую или биологическую для сбора плодов, а также как лучше их использовать или перерабатывать.</p>
<br>
         

        </div>

        <div class="col-lg-6 mb-4">

          <div class="view overlay z-depth-1-half">
            <img src="media/combain.webp" class="img-fluid"
              alt="">
            <a href="#">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>

      </div>


    </section>


  </div>

</div>

</main>



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
