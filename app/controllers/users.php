<?php 
include "app/database/db.php";

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['repeat-password'];
    $admin = 0;
    $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $password,
    ];
    $id = insert('users', $post);
    echo $id;
}