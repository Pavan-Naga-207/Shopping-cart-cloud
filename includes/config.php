<?php
define('DB_SERVER','shoppingdbserver.mysql.database.azure.com');
define('DB_USER','database');
define('DB_PASS' ,'pass@1234');
define('DB_NAME', 'shopping');
$host = 'shoppingdbserver.mysql.database.azure.com';
$username = 'database';
$password = 'pass@1234';
$db_name = 'shopping';
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
