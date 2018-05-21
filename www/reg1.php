  <?php header( "Content-Type: text/html; charset=utf-8;" );
 header( "Content-Encoding: utf-8" );
?>
<html>
<head>
 <title>Замовлення квітів</title>
</head>
<body>
  <h1>Реєстрація</h1>
  <?php 
   $eMail = chkVars($_GET['eMail']);
 $pass = chkVars($_GET['pass']);
  $link = mysqli_connect("localhost", "root", "", "flower");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}

 $query="INSERT INTO users(login, pass) VALUES ('".$eMail."','".$pass."');";
  echo $query;

  //mysqli_close();
?>
 
 
 </body>
</html>