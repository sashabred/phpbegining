<?php
$username='Саша';
$age=23;
$mail='slowpoche@gmail.com';
$city='Улан-Удэ';
$about='Студент-сантехник';
 ?>
 <h2> Страница пользователя <?=$username?> </h2>
 <table>
 <tr>
    <td>Имя</td>
    <td><?=$username?></td>
 </tr>
 <tr>
   <td>Возраст</td>
   <td><?=$age?></td>
 </tr>
 <tr>
   <td>Адрес электронной почты</td>
   <td><a href='mailto:slowpoche@gmail.com'><?=$mail?></a></td>
 </tr>
 <tr>
   <td>Город</td>
   <td><?=$city?></td>
 </tr>
 <tr>
   <td>О себе</td>
   <td><?=$about?></td>
 </tr>
 </table>
