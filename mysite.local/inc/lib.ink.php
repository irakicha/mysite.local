<?php
  // Функция перехвата ошибок
  // $nuber - номер ошибки, $msg - сообщение, $file в каком файле произошла ошибка, $line - строка, в кот произошла ошибка

  function myError ($number, $msg, $file, $line){

    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] $msg, $file : $line\n";

    switch ($number) {
      case E_USER_ERROR:
      case E_USER_WARNING:
      case E_USER_NOTICE: 
        echo $msg;        
        // break;
      // default: echo $msg; 
    }
    error_log($str, 3, "error.log");

  }
  

  //Меню

  function drawMenu ($menu, $vertical = true){
    if(!is_array($menu)) 
      return false;
    $style = "";
    if(!$vertical){
      $style = " style='display:inline-block; margin-right:20px;'";
    }
    echo "<ul>";
      foreach ($menu as $item) {
          echo "<li$style>";
          echo "<a href='$item[href]'>{$item['link']}</a>";
          echo "</li>";
      }
      echo "</ul>";
      return true;
  }

  //draw table

  function drawTable($cols = 10, $rows = 10, $table_color = 'lightblue'){
    static $cnt = 0;
    $cnt++;
    echo "Таблица рисуется $cnt раз";
    echo "<table border = '$border'>";
    for ($tr=1; $tr <= $rows; $tr++) { 
      echo "<tr>";
        for ($td=1; $td <= $cols ; $td++) {
          if($tr == 1 || $td == 1){
            echo "<th style='background:$table_color'>".$tr*$td."</th>";  
          } else {
            echo "<td>".$tr*$td."</td>";  
          }
        }
      echo "</tr>\n";
    }
    echo "</table>";
  }

  function calculator($num1, $num2, $operator){
  	$result = NULL;
  	switch ($operator) {
  		case '*':
  			$result = $num1 * $num2;
  			break;
  		case '+':
  			$result = $num1 + $num2;
  			break;
  		case '-':
  			$result = $num1 - $num2;
  			break;
  		case '/':
  			if ($num2 == 0) {
  				$result = "На ноль делить нелязя!";
  			} else {
  				$result = $num1 / $num2;	
  			}
  			break;
  		default:
  			$result = "Введен неверный оператор. Используйте только '+', '-', '*', '/'";
  			break;
  	}

  echo "$num1 $operator $num2".' = '."$result";

  return true;
  }

?>