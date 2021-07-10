<?php
include('config.php');
extract($_POST);
$sql = "INSERT into registration(phone,name,email,password) VALUES('" . $phone . "','" . $name . "','" . $email . "','" . $password . "')";
$success = $mysqli->query($sql);

if(!$success) {
          die("Couldn't enter data: ".$feedback->error);

}
echo "Thank you for regestring";
$name = '';
?>
