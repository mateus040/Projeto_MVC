<?php

spl_autoload_register(function ($nome_da_classe) {

    // echo "Tentou dar include de: " . $nome_da_classe . "<br />";
    // echo   Tentou dar include de: ProjetoPHP\Controller\PessoaController 
    // F:\ETEC\2º Ano\Programação WEB II\PHP\ProjetoPHP/ProjetoPHP\Controller\PessoaController

    // echo dirname(__FILE__);



    /*include '../' . $nome_da_classe . '.php';*/

    $arquivo = BASEDIR. '/' . $nome_da_classe . '.php';

    if(file_exists($arquivo))
    {
        include $arquivo;
    }
    else
        exit('Arquivo não encontrado. Arquivo: ' .$arquivo . "<br />");
    



    /*$classe_controller = 'Controller/' . $nome_da_clase . ".php";
    $classe_model = 'Model/' . $nome_da_clase . ".php";
    $classe_dao = 'DAO/' . $nome_da_clase . ".php";


    if(file_exists($classe_controller))
    {
        include $classe_controller;

    } else if(file_exists($classe_model)) {

        include $classe_model;

    } else if(file_exists($classe_dao)) {

        include $classe_dao;
    } */

    /* */

    
});