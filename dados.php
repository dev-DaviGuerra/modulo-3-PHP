<?php

if (!empty($_GET['login'] && !empty($_GET['password']))) {
    $login = $_GET['login'];
    $password = $_GET['password'];

    echo "Seu nome é $login e sua senha é $password";
}