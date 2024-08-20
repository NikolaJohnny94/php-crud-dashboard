<?php
include 'config/db.php';

$sql_query = 'SELECT * FROM users';
$response = mysqli_query($connection, $sql_query);
$users = mysqli_fetch_all($response, MYSQLI_ASSOC);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$username_error = isset($_SESSION['username_error']) ? $_SESSION['username_error'] : '';
$email_error = isset($_SESSION['email_error']) ? $_SESSION['email_error'] : '';
$role_error = isset($_SESSION['role_error']) ? $_SESSION['role_error'] : '';

$edit_username_error = isset($_SESSION['edit_username_error']) ? $_SESSION['edit_username_error'] : '';
$edit_email_error = isset($_SESSION['edit_email_error']) ? $_SESSION['edit_email_error'] : '';

unset($_SESSION['username_error']);
unset($_SESSION['email_error']);
unset($_SESSION['role_error']);

unset($_SESSION['edit_username_error']);
unset($_SESSION['edit_email_error']);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>