<?php

//Superglobais no PHP
//São variaveis que estão definidas para a gente no escopo global
// $_GET
//isset()
//empty


if (!empty($_GET['campanha'])) {
    $numero_campanha = $_GET['campanha'];
    echo 'Você veio pela campanha'.$numero_campanha;
} else {
    echo 'Variável não definida ou vazia';
}
