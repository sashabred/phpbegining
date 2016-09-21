<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Ваше число:<input type="text" name="r">
<input type="submit">
</form>

<?php
$a=5;
$b=isset($_GET['r']) ? $_GET['r'] : 2;

if ($a>$b) {
   echo "Слишком мало \n";
   echo "Введите другое число";
   return;
 }
 elseif ($a<$b) {
   echo "Слишком много \n";
   echo "Введите другое число";
   return;
 }
 else {
   echo "Вы угадали <br\>";
 }

echo "Ваше число $b \n";
echo "Число компьютера $a";

?>
