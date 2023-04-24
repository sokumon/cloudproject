<?php
$DB_host = "35.239.249.28";
$DB_user = "root";
$DB_pass = "generate";
$DB_name = "schoolmanagement";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>