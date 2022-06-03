<?php

use Projeto_MVC\Controller\PessoaController;
use Projeto_MVC\Controller\ProdutoController;
use Projeto_MVC\Controller\categoria_produtoController;
use Projeto_MVC\Controller\FuncionarioController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    #ROTA PAGINA INICIAL
    case '/home':
        include 'View/modules/PaginaInicial/PaginaInicial.php';
    break;

    # ROTAS PESSOA
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;



    ## ROTAS PARA PRODUTO   
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;


    case '/produto/delete':
        ProdutoController::delete();
    break;



    # ROTAS CATEGORIA PRODUTO   
    case '/categoria_produto':
        categoria_produtoController::index();
    break;
    
    case '/categoria_produto/form':
        categoria_produtoController::form();
    break;

    case '/categoria_produto/save':
        categoria_produtoController::save();
    break;

    case '/categoria_produto/delete':
        categoria_produtoController::delete();
    break;


    # ROTAS FUNCIONARIO
    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

 

    default:
        header("Location: /home");
    break;
}