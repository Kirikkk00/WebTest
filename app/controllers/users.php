<?php 
include "app/database/db.php";

$isSubmit = false;
$errorMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['repeat-password']);
    $previousePassword = trim($_POST['password']);
    $admin = 0;

    if ($login === '' || $email === '' || $password === '') {
        $errorMessage = 'Не все поля заполнены! Заполните пожалуйста 
        все поля';
    } elseif (mb_strlen($login, 'UTF8') < 3) {
        $errorMessage = 'Логин слишком короткий! 
        Логин должен быть не менее 3-х символов';
    } elseif ($previousePassword !== $password) {
        $errorMessage = 'Пароль был повторен неправльно, убедитесь 
        чтобы он был таким же, как и в поле выше.';
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $password,
        ];
        tt($post); 
        $id = insert('users', $post);
    }
    $isSubmit = true;
} else {
    echo 'GET';
    $login = '';
    $email = '';
}


?>