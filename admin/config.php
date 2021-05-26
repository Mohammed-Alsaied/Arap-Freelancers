<?php
// DB Connection
define('SERVER_NAME','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','project1');

$connection = mysqli_connect(SERVER_NAME,DB_USER,DB_PASS,DB_NAME);
if (!$connection) {
    die('Connection Failed..');
}
/*mysqli_query($connection,"INSERT INTO users
VALUES (NULL,'Mohamed Alsaied','mohamed','mohamed.saied.civil@gmail.com',159753)");
echo 'Created Successfuly';*/
