<?php
session_start();

$data_file = "users.txt";

$email = $_POST['email'];
$password = $_POST['password'];

$users = file($data_file, FILE_IGNORE_NEW_LINES);

foreach ($users as $user) {
    list($uname, $uemail, $upassword, $urole) = explode(',', $user);
    if ($uemail == $email && $upassword == $password) {
        $_SESSION['usernmae'] = $uname;
        $_SESSION['email'] = $uemail;
        $_SESSION['role'] = $urole;

        // Redirect based on role
        if ($urole == "admin") {
            header("Location: role_management.php");
            exit;
        } elseif ($urole == "manager") {
            header("Location: manager_dashboard.php");
            exit;
        } else {
            header("Location: user_dashboard.php");
            exit;
        }
    }
}
echo "Invalid credentials!";
