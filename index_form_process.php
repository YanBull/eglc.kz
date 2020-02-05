<?php


$name= ($_POST['name']);
$surname=($_POST['surname']);
$email= ($_POST['email']);

$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_base = 'project';
	$db_table = "tusers";


  // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_error .') '. $mysqli->connect_error);
	}
mysqli_set_charset($mysqli, "utf8");

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])){
    

    $vorname = $_POST['name'];
	$nachname = $_POST['surname'];
	$email = $_POST['email'];
    
   $result = $mysqli->query("INSERT INTO tusers (Name,Nachname,Email)
		VALUES ('$name ', '$surname', '$email')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo mysqli_error($mysqli).hide;
	}   }
?>