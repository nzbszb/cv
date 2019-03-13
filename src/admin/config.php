<?php


$db_host = "localhost";

$db_username = "root";

$db_pass = "";

$db_name = "cv";

$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name");

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
} else {
//	echo "Successful database connection, happy coding!!!";
}
?>