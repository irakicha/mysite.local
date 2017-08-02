<?php
    error_reporting(0);
    require_once "/inc/lib.ink.php";
    require_once "/inc/config.ink.php";
    set_error_handler("myError");
    require_once "/inc/data.ink.php";

//Инициализация заголовков страницы

$title = "Сайт нашей школы";
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));  
switch ($id) {
  case 'about':
    $title = 'О сайте';
    $header = 'О нашем сайте';
    break;
  case 'contact':
    $title = 'Контакты';
    $header = 'Обратная связь';
    break;
  case 'table':
    $title = 'Таблица умножения';
    $header = 'Таблица умножения';
    break;
  case 'calc':
    $title = 'Он-лайн калькулятор';
    $header = 'Калькулятор';
    break;
}
    

?>

<!DOCTYPE html>
<html>

<head> 
  <title><?php echo $title ?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <? require_once "/inc/top.ink.php"; ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php 

    switch ($id) {
      case 'about':
        include "about.php";
        break;
      case 'contact':
        include "contact.php";
        break;
      case 'table':
        include "table.php";
        break;
      case 'calc':
        include "calc.php";
        break;
      default:
        include "/inc/index.ink.php";
        break;
    }


    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <? require_once "/inc/menu.ink.php"; ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <? require_once "/inc/bottom.ink.php"; ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>

<? //phpinfo(); ?>