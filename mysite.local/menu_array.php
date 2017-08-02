<?php 
	$leftMenu = [
        ["link" => "Домой", "href" => "index.php"],
        ["link" => "О нас", "href" => "about.php"],
        ["link" => "Контакты", "href" => "contact.php"],
        ["link" => "Таблица умножения", "href" => "table.php"],
        ["link" => "Калькулятор", "href" => "calc.php"]
  ];

  foreach ($leftMenu as $value) {
  	foreach ($value as $key => $value) {
  		echo "$key - $value\n";
  	}
  }
?>

  