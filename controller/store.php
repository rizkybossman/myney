<?php
session_start();
include("../model/connection.php"); 

if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $conn = OpenCon();

    // Sanitize user input
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    // SQL query to check if the user exists with the given email and password
    $query = "SELECT * FROM auth_users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // var_dump('tfghvwhvw');
        // Login successful - set session variables and redirect
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
    var_dump('asgdhabsdbjhabsd');
    echo 'tasfgdasgdahwjd';
    header("Location: ../Login/public/index.php");
        // exit();
    } else {
        // Invalid credentials - set error message and redirect back to login
        $_SESSION['errorMessage'] = "Invalid email or password";
        // header("Location: ../Login/public/index.php");
    var_dump('asgdhabsdbjhabsd');
    echo 'tasfgdasgdahwjd';
    exit();
    }
} else {
    // Empty email or password submitted - set error message and redirect
    $_SESSION['errorMessage'] = "Please enter both email and password";
    // header("Location: ../Login/public/index.php");
    var_dump('asgdhabsdbjhabsd');
    echo 'tasfgdasgdahwjd';
    exit();
}
?>
