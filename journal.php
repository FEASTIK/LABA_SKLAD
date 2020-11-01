<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/count.php';?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Склад металлоконструкций</title>
     <link rel="shortcut icon" href="./img/icon.png" type="image/png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect"  target="_blank">
          <strong class="blue-text">Склад</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
           <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="index.php">Главная
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="price.php" >Прайс товара</a>
			  <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="list-post.php" >Список поставщиков</a>
			  <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="prodavci.php" >Список продавцов</a>
			 <span class="sr-only">(current)</span>
            </li>
			</li>
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="journal.php" >Журнал учета продаж</a>
			  <span class="sr-only">(current)</span>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="login.php" class="nav-link border border-light rounded waves-effect">
                <i class="fab fa"></i>Личный кабинет
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5">

          <h1 class="mb-4">
            <strong>Журнал учета продаж</strong>
          </h1>
          
          

        </div>
        <!-- Content -->
      </section>
	   <hr class="my-5">
<table border="1">
   <tr>
    <th>N продажи</th>
    <th>Дата продажи</th>
	<th>Штрих код</th>
    <th>Наименование</th>
	<th>Код вида</th>
    <th>Кол-во</th>
   </tr>
   <tr>
    <td>1 </td>
    <td>23.09.2020 </td>	
	<td>111555666 </td>
    <td>Кусок железа </td>
	<td>5 </td>
    <td>10 </td>
  </tr>
  <tr>
    <td>2 </td>
    <td>23.09.2020 </td>	
	<td>111555666 </td>
    <td>Кусок железа </td>
	<td>6 </td>
    <td>15 </td>
  </tr>
  <tr>
    <td>3 </td>
    <td>23.09.2020 </td>	
	<td>111555666 </td>
    <td>Кусок железа </td>
	<td>7 </td>
    <td>20 </td>
  </tr>
  <tr>
    <td>4 </td>
    <td>23.09.2020 </td>	
	<td>111555666 </td>
    <td>Кусок железа </td>
	<td>8 </td>
    <td>35 </td>
  </tr>
  <tr>
    <td>5 </td>
    <td>23.09.2020 </td>	
	<td>111555666 </td>
    <td>Кусок железа </td>
	<td>9 </td>
    <td>5 </td>
  </tr>
 </table>
      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

    

    <hr class="my-4">

    

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="https://vk.com/feastik" target="_blank"> Vladislav Timonin </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
