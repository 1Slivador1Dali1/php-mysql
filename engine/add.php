<?php
require_once './db.php';

$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$date = mysqli_real_escape_string($db, $_POST['date']);

$insert = "INSERT INTO `team` (`name`,`email`,`date`) VALUES ('$name','$email','$date')";

$query = mysqli_query($db, $insert);
if ($query) {
    header('Location: /WP/');
}