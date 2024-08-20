<?php
session_start();
include '../config/db.php';
include '../utils/checkIfFieldsAreEmpty.php';

$username = $email = $role = '';
$username_error = $email_error = $role_error = '';

if (isset($_POST['submit'])) {
    if (!empty($_POST['username'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $username_error = 'Username is required!';
        $_SESSION['username_error'] = $username_error;
        header('Location: ../index.php');
    }

    if (!empty($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($connection, $email_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $email_error = "Email <strong class='underline'>$email</strong> already exists!";
            $_SESSION['email_error'] = $email_error;
            header('Location: ../index.php');
        }
    } else {
        $email_error = 'Email is required!';
        $_SESSION['email_error'] = $email_error;
        header('Location: ../index.php');
    }


    if (!empty($_POST['role'])) {
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $role_error = 'Role is required';
        $_SESSION['role_error'] = $role_error;
        header('Location: ../index.php');
    }

    if (checkIfFieldsAreEmppty($username, $email, $role)) {
        $query = "INSERT INTO users (username, email, role) VALUES ('$username', '$email', '$role')";
        if (mysqli_query($connection, $query)) {
            header('Location: ../index.php');
            exit();
        }
    }
}
