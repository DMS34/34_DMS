<?php
include('config.php');
extract($_POST);
$sql = "INSERT into login(phone,name,password) VALUES('" . $phone . "','" . $name . "','" . $password . "')";
$success = $mysqli->query($sql);

if(!$success) {
          die("Couldn't enter data: ".$feedback->error);

}
echo "Thank you for login";
$name = '';
?>
