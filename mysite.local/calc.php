<!-- Область основного контента -->
<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 =(int) $_POST['num1'];
    $num2 =(int) $_POST['num2'];
    $operator =trim(strip_tags($_POST['operator']));
  }

?>

<div>
  <p>Результат:</p>
  <p><?php calculator($num1, $num2, $operator);?></p>
</div>

<form action='<?= $_SERVER['REQUEST_URI']?>' method="POST">
  <label>Число 1:</label>
  <br />
  <input name='num1' type='text' value="<?= $_POST['num1']?>" />
  <br />
  <label>Оператор: </label>
  <br />
  <input name='operator' type='text' value="<?= $_POST['operator']?>"/>
  <br />
  <label>Число 2: </label>
  <br />
  <input name='num2' type='text' value="<?= $_POST['num2']?>"/>
  <br />
  <br />
  <input type='submit' value='Считать'>
</form>
<!-- Область основного контента -->