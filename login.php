<?php
//header envia um cabeçalho html
session_start();


if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);

    if ($usuario == 'admin' && $senha == 'admin') {
        $_SESSION['usuario'] = $usuario;
        if(!empty($_POST['tema'])){
            setcookie('tema', htmlspecialchars($_POST['tema']));
        }


        header('Location: welcome.php');
    } else {
        echo 'Usuario ou senha inválidos';
        echo '<a href="index.php"> Tentar novamente </a>';
    }
} else {
    echo 'Preencha todos os dados.';
    echo '<a href="index.php"> voltar </a>';
}

