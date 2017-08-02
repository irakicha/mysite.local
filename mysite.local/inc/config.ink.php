<?php 
  //установка локали и даты
  setlocale(LC_ALL, 'russian');
  $day = strftime('%d');
  $mon = strftime('%B');
  $mon = iconv('windows-1251', 'utf-8', $mon);
  $year = strftime('%Y');

  //установка приветствия, в зависимости от времени суток:

  $hour = (int) strftime("%H");
  $welcome = '';

  if ($hour > 0 && $hour < 6):
    $welcome = 'Good night';
  elseif ($hour >= 6 && $hour < 12):
    $welcome = 'Good morning';
  elseif ($hour >= 12 && $hour < 18):
    $welcome = 'Good day';
  elseif ($hour >= 18 && $hour <= 23):
    $welcome = 'Good night';
  else:
    $welcome = 'Good night';
  endif;
?>