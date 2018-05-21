<?php
$link = mysqli_connect("localhost", "root", "", "flower");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}
 $query="SELECT *FROM kategoria";
if ($result = mysqli_query($link, "SELECT *FROM kategoria")) {

    /* определение числа рядов в выборке */
    $row_cnt = mysqli_num_rows($result);

    printf("В выборке %d рядов.\n", $row_cnt);
	
//	var_dump($result_set);
	 while($row = mysqli_fetch_assoc($result)){
        echo $row['id_k'].' '.$row['name_k']."<form action=<a href='flw.php?id=".$row['id_k'].">".$row['name_k']."</a>">"."<button type='submit'>Кнопка-ссылка</button></form>'<br />';
    }

    /* закрытие выборки */
    mysqli_free_result($result);
}

/* закрытие соединения */
mysqli_close($link);
?>