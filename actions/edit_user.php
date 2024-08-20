<?php
session_start();
include '../config/db.php';
include '../utils/checkIfFieldsAreEmpty.php';

$edit_id = $username = $email = $role = '';

if (isset($_POST['edit'])) {
    $edit_id = $_POST['edit_id'];
    $initial_email = $_POST['initial_email'];

    if (!empty($_POST['edit_username'])) {
        $username = filter_input(INPUT_POST, 'edit_username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $username_error = 'Username is required!';
        $_SESSION['edit_username_error'] = $username_error;
        header('Location: ../index.php');
    }

    if (!empty($_POST['edit_email'])) {
        $email = filter_input(INPUT_POST, 'edit_email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($connection, $email_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user && $email !== $initial_email) {
            $email_error = "Email <strong class='underline'>$email</strong> already exists!";
            $_SESSION['edit_email_error'] = $email_error;
            header('Location: ../index.php');
        }
    } else {
        $email_error = 'Email is required!';
        $_SESSION['edit_email_error'] = $email_error;
        header('Location: ../index.php');
    }

    $role = filter_input(INPUT_POST, 'edit_role', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (checkIfFieldsAreEmppty($username, $email, $role)) {
        $sql = "UPDATE users SET username = '$username', email = '$email', role = '$role' WHERE users.id = '$edit_id';";
        if (mysqli_query($connection, $sql)) {
            header('Location: ../index.php');
            exit();
        }
    }
}
