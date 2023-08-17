<?php

$link = mysqli_connect("localhost", "root", "", "wb_ims");


if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$anc_date = mysqli_real_escape_string($link, $_REQUEST['anc_date']);
$anc_cont = mysqli_real_escape_string($link, $_REQUEST['anc_cont']);


$sql = "INSERT INTO announcement_wall (id, anc_date, anc_cont) VALUES ('$id', '$anc_date', '$anc_cont')";
if (mysqli_query($link, $sql)) {
    header("location:ims_ancwalladmin.php");

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>