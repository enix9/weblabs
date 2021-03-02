 <?php 
	require 'db.php';
?>
                         

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1.0">
	<title>Сбор урожая</title>
</head>
 <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<body>
	 <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
      <ul class="navbar-nav">
        <li class="nav-item active">
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



	<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="media/background01.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Сбор урожая</h1>
            <p>Август и сентябрь – основная пора сбора выращенного урожая. И от того когда и как был произведён сбор, зависит качество плодов и их лёжкость.
</p>
           </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="media/background02.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>Технологии сбора</h1>
            <p> Следует учитывать готовность съедобных частей зеленных и пряных растений, степень зрелости – техническую или биологическую для сбора плодов, а также как лучше их использовать или перерабатывать.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="media/background03.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Время сбора</h1>
            <p>Очень важно время сбора урожая. Это не только отражается на качестве плодов или побегов, листвы, но и может сказаться на длительности хранения. Если запоздать с уборкой плодов томатов, огурцов, кабачков, патиссонов и ранней моркови, свеклы и капусты, они перезревают и теряют товарный вид, меняют вкусовые качества и зачастую непригодны к употреблению или переработке.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" id="vid">

    <!-- Three columns of text below the carousel -->



    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Томат</h2>
        <p class="lead">Основной урожай томатов созревает в августе-начале сентября. Сбор томатов производят по мере созревания плодов, если они будут в течение нескольких дней употреблены в пищу или переработаны. В случае, когда томаты планируют транспортировать на дальние расстояния или консервировать, их срывают недозревшими, когда они слегка покраснели.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="media/tomat01.webp" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Огурец</h2>
        <p class="lead">Уборку плодов огурца производят при их оптимальном размере, не давая им перерастать. Во время массового созревания плодов их собирают ежедневно, лучше дважды в день — утром и вечером. При уборке огурцов следят за качеством навязывающихся плодов, а также состоянием самого растения, своевременно удаляя уродливые и повреждённые завязи, плоды и листья.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="media/cucumber01.webp" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Перец</h2>
        <p class="lead">Сладкий перец хорошо удаётся в южных регионах, а в северных следует использовать для доращивания теплицы или определённую агротехнику этой культуры. При появлении пасынков и цветков в нижней части растения (ниже первого разветвления) их следует удалять.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="media/pepper01.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; VolSU A.Kudinov</p>

  </footer>


  <!-- /.container -->
</body>
</html>