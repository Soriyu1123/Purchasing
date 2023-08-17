<?php

$link = mysqli_connect("localhost", "root", "", "wb_ims");


if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$role = mysqli_real_escape_string($link, $_REQUEST['role']);


$sql = "INSERT INTO accounts (id, firstname, lastname, username, password, role) VALUES ('$id', '$firstname', '$lastname', '$username', '$password','$role')";
if (mysqli_query($link, $sql)) {
    header("location:ims_addUser.php");

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>