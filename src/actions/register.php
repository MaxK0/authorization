<?php

require_once __DIR__ . '/../helpers.php';


$avatarPath = null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;



addOldValue(key: 'email', value: $email);
addOldValue(key: 'name', value: $name);

//Validation

$_SESSION['validation'] = [];

if (empty($name)) {
    addValidationError(fieldName: 'name', message: 'Неверное имя');
}
    
if (!filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
    
    addValidationError(fieldName: 'email', message: 'Указана неправильная почта');
}
    
if (empty($password)) {
    addValidationError(fieldName: 'password', message: 'Пароль пустой');
}

if ($password != $passwordConfirmation) {
    addValidationError(fieldName: 'passwordConfirmation', message: 'Пароли не совпадают');
}

if (!empty($avatar)) {
    $types = ['image/jpeg', 'image/png'];

    if (!in_array(needle: $avatar['type'], haystack: $types)) {
        addValidationError(fieldName: 'avatar', message: 'Изображение профиля имеет неверный тип');
    }

    if ($avatar['size'] / 1000000 >= 1) {
        addValidationError(fieldName: 'avatar', message: 'Изображение должно быть меньше 1 Мб');
    }
}

if (!empty($_SESSION['validation'])) {
    redirect('/register.php');
}

if (!empty($avatar)) {
    $avatarPath = uploadFile(file: $avatar, prefix: 'avatar');
}