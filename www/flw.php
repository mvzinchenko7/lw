<?php header( "Content-Type: text/html; charset=utf-8;" );
 header( "Content-Encoding: utf-8" );
?>
<html>
<head>
 <title>Замовлення квітів</title>
</head>
<body>
 <h1>
  Букети
 </h1>
 <hr />
 
 <?php 
 $link = mysqli_connect("localhost", "root", "", "flower");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}
//$t=chkVars($_GET['id_k']);
 //$pass = chkVars($_GET['id_k']);
 
 $query="SELECT *FROM byket WHERE n_k=".$_GET['id'];
 echo $query;
 if ($result = mysqli_query($link, $query)) {

    /* определение числа рядов в выборке */
    $row_cnt = mysqli_num_rows($result);

    printf("В выборке %d рядов.\n", $row_cnt);
	echo "<br/>";
//	var_dump($result_set);
	 while($row = mysqli_fetch_assoc($result)){
		// echo $row['id_k'].' '.$row['name_k'].'<br />';
		// $strName=$row['name_k'];
	
		//$strLink="<a href='flw.php?id=".$row['id_k']."'>".$row['name_k']."</a>";
		 
       echo $row['id_b']." ". $row['name_b']." ". $row['price']."   "."<a href='form.php?id=".$row['id_b']."'><button>Купить</button></a>"."<br/>";
    
	}

   
}
 
 
 mysqli_close($link);

?>
 </br>
<p><a href="flower.php">Return to the list</a></p> 
</body>
</html>