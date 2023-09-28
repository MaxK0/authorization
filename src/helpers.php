<?php

session_start();

function redirect(string $path) {
    header("Location: $path");
    die();
}

function validationErrorAttr(string $fieldName) {
    echo isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function hasValidationError($fieldName) : bool {
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorMessage(string $fieldName) {
    $message = $_SESSION['validation'][$fieldName] ?? '';
    unset($_SESSION['validation'][$fieldName]);
    echo $message; 
}

function addValidationError(string $fieldName, string $message) {
    $_SESSION['validation'][$fieldName] = $message;    
}

function addOldValue(string $key, mixed $value) {
    $_SESSION['old'][$key] = $value;
}

function old(string $key) : string {
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function uploadFile(array $file, string $prefix = '') : string {
    
    $uploadPath = __DIR__ . '/../uploads';
    
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, permissions: 0777, recursive: true);
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $fileName = $prefix . '_' . time() . ".$ext";
    
    $path = "$uploadPath/$fileName";

    if (!move_uploaded_file(from: $file['tmp_name'], to: $path)) {
        die('Ошибка при загрузке файла на сервер');
    }

    return "uploads/$fileName";

}