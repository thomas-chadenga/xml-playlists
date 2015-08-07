<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 15/04/09
 * Time: 3:30 PM
 */

//connect to db
//connect to db

    $host = "localhost";
    $port = 3306;
    $socket = "";
    $user = "root";
    $password = "";
    $dbname = "playlists";


//$conn = DB_Connection();

$con = mysql_connect($host,$user,$password);
$dbs = mysql_select_db($dbname, $con);

//fetch results

$id = $_GET['id'];

$sql = "SELECT * FROM questions WHERE question_type = '$id'";
$result = mysql_query($sql);

while($row = mysql_fetch_assoc($result)){
    $json[] = $row;
}

echo json_encode($json);

