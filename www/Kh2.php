<?php header( "Content-Type: text/html; charset=utf-8;" );
 header( "Content-Encoding: utf-8" );
?>
<html>
<head>
 <title>PHP test</title>
</head>
<body>
 <h3>
 <?php echo "Hello from PHP!"; ?>
 </h3>
 <hr />
 <h3>
 <b>
 <i>
 <?php echo "Hello Марина!"; ?>
 </i>
 </b>
 </h3>
  <hr />
  
  <table border ="3">
  <tr>
  <td style='color: 256987;'> <b>Зінченко</b>
  </td>
  <td style='color: blue;'> Марина
  </td>
  </tr>
  </table>
 <?php  
 
$linkAddr="http://www.tsatu.edu.ua";
$linkTetx="Це мій університет";
$emailAddr = "Ваш Е-мейл, наприклад student@email.ua";
$emailTxt = "Мій Е-мейл";
/*
//echo  '<a href="<? echo $linkAddr //?>" ><?php echo $linkTetx ?></a>';
*/

?>
 </br>
 <a href="<? echo $linkAddr ?>" ><?php echo $linkTetx ?></a>
 </br>
 <a href="<? echo $emailAddr ?>" ><?php echo $emailTxt ?></a>
 </br>
 

 
 
 
</body>
</html>