<?php
define('DB_SERVER','shoppingdbserver.mysql.database.azure.com');
define('DB_USER','database');
define('DB_PASS' ,'pass@1234');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
