<?php header( "Content-Type: text/html; charset=utf-8;" );
 header( "Content-Encoding: utf-8" );
?>
<html>
<head>
 <title>Замовлення квітів</title>
</head>
<body>
 <h1>
   Замовлення квітів
 </h1>
 <hr />
 <p><a href="auto.php">Vhid</a></p> 
  <hr />
   <p><a href="reg.php">Registration</a></p> 
  <hr />
 <?php 
 /*$db_hostname='localhost';
 $db_database='flower';
 $db_username='root';
 $db_password='';
*/?>

 <?php 
 $link = mysqli_connect("localhost", "root", "", "flower");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}
echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";

 $query="SELECT *FROM kategoria";
if ($result = mysqli_query($link, "SELECT *FROM kategoria")) {

    /* определение числа рядов в выборке */
    $row_cnt = mysqli_num_rows($result);

  //  printf("В выборке %d рядов.\n", $row_cnt);
	
//	var_dump($result_set);
	 while($row = mysqli_fetch_assoc($result)){
		// echo $row['id_k'].' '.$row['name_k'].'<br />';
		// $strName=$row['name_k'];
	
		$strLink="<a href='flw.php?id=".$row['id_k']."'>".$row['name_k']."</a>";
		 
      //  echo $row['id_k'].$strLink;
		echo "<li>".$strLink."</li>";
    
	}
	

    
}

    /* закрытие выборки */
mysqli_free_result($result);
/* закрытие соединения */
mysqli_close($link);

?>


 
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