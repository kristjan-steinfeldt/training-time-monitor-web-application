<?php
$servername='localhost';
$username='meeskond1iktkhk';
$password='JQav#cPfkl^,';
$dbname = "meeskond1iktkhk_AT";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
?>