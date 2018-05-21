  <?php header( "Content-Type: text/html; charset=utf-8;" );
 header( "Content-Encoding: utf-8" );
?>
<html>
<head>
 <title>Замовлення квітів</title>
</head>
<body>
  <h1>Заказ</h1>
  <?php 
 $link = mysqli_connect("localhost", "root", "", "flower");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}

 $query="SELECT *FROM byket WHERE id_b=".$_GET['id'];
 // echo $query;
 if ($result = mysqli_query($link, $query)) {

    /* определение числа рядов в выборке */
    $row_cnt = mysqli_num_rows($result);

   // printf("В выборке %d рядов.\n", $row_cnt);
	
//	var_dump($result_set);
	 while($row = mysqli_fetch_assoc($result)){
	
		echo $row['id_b']." ". $row['name_b']." ". $row['price'];
    
	}
  
}
  //mysqli_close();
?>
  
 <form action="form.php" method="GET" id="zakaz"> 
 
  
 
 <br/>
<h3>Адрес<sup><font color="red"></font></sup></h3> 
<input type="text" maxlength="20" name="adres" required="required"/>
<h3>Ваш e-mail<sup><font color="red">*</font></sup></h3> 
<input type="text" maxlength="20" name="eMail" required="required"/>
<h3>Ваш пароль<sup><font color="red">*</font></sup></h3> 
<input type="password" maxlength="8" name="pass">
<br/>
<br/>
<button>Заказать</button>
<hr/>

<input type="hidden" name="uID" value="124578" />
<input type="hidden" name="queryDate"/>
<body bgcolor="white">
 
 
 </form>
 </body>
</html>