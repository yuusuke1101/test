<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents('users.json'), true);
    $users[] = ['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT)];
    file_put_contents('users.json', json_encode($users));

    header('Location: login.html');
}
?>