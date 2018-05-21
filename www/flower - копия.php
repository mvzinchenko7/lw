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
 
 <?php 
 $db_hostname='localhost';
 $db_database='flower';
 $db_username='root';
 $db_password='';
?>

 <?php 
 $db_server=mysqli_connect($db_hostname, $db_username, $db_password);
 if(!$db_server) die ("abuyl".mysqli_error());
 
 mysqli_select_db( $db_server, $db_database) or die ("fgyl");
 
 
 
 $query="SELECT *FROM kategoria";
 $result= mysqli_query($db_server,$query) || die(mysqli_error($db_server)); ;
 if (!$result) die ("zapros pomilka");
  $row_cnt = mysqli_num_rows($result);

    printf("В выборке %d рядов.\n", $row_cnt);
	
//	var_dump($result_set);
	 while($row = mysqli_fetch_assoc($result)){
		echo $row['id_b'].' '.$row['name_b'].' '.$row['price_b'].'<br />';
		// $strName=$row['name_k'];
	
		$strLink="<a href='flw.php?id=".$row['id_k']."'>".$row['name_k']."</a>";
		 
      //  echo $row['id_k'].$strLink;
		echo "<li>".$strLink."</li>";
    
	}
	

    
}
 
 mysqli_close($db_server);
?>


 
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