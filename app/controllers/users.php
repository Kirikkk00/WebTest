<?php 
include "app/database/db.php";

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = password_hash($_POST['repeat-password'], PASSWORD_DEFAULT);
    $admin = 0;
    $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $password,
    ];
    $id = insert('users', $post);
    $last_row = selectOne('users', ['id' => $id]);
    echo $id;
    tt($last_row);
}