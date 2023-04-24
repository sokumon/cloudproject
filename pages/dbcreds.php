<?php
$mysql_host ='35.239.249.28';
$mysql_user ='root';
$mysql_pward ='generate';
$mysql_db='schoolmanagement';
$coun_err='Could not connect';
global $connect;
$connect = mysqli_connect($mysql_host,$mysql_user,$mysql_pward,$mysql_db);

if(!$connect){
    die($coun_err);
}
?>