<?php
include '../config/db.php';

if (isset($_POST['delete'])) {
    $id =  $_POST['id'];
    $sql = "DELETE FROM users WHERE users.id = '$id';";
    if (mysqli_query($connection, $sql)) {
        header('Location: ../index.php');
        exit();
    }
}
