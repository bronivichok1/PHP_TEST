<?php
header("Access-Control-Allow-Origin: *");
$host='localhost';
$db = 'DataAbitur';
$username = 'dbuser';
$password = 'admin';
$DataLink=array();
$url='ajax.php'

# Создаем соединение с базой PostgreSQL с указанными выше параметрами
$dbconn = pg_connect("host=$host port=5432 dbname=$db user=$username password=$password");
 

# Сделаем запрос на получение списка созданных таблиц
$res = pg_query($dbconn, "SELECT id from DataAbitur where id='1'");
if (!$res) {
    echo "Произошла ошибка.\n";
}
# Выведем список Link
while ($row = pg_fetch_row($res)) {
    array_push($DataLink,$row[0]);

}

/*$json_data = json_encode($DataLink);
    file_put_contents('DataLink.json', $json_data);*/
#Авторизация, принимаю лог и пароль
/*$Log['Login']=$_POST['Login'];
$Passw['Password']=$_POST['Password'];*/


?>