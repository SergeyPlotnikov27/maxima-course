<?php

$login = "";
$password = "";

if (isset($_POST["login"])) {

    $login = $_POST["name"];
}
if (isset($_POST["password"])) {

    $password = $_POST["password"];
}
echo "Логин: $login <br> Пароль: $password";
