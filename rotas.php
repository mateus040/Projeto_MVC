<?php

use Projeto_MVC\Controller\PessoaController;
use Projeto_MVC\Controller\ProdutoController;
use Projeto_MVC\Controller\categoria_produtoController;
use Projeto_MVC\Controller\FuncionarioController;
use Projeto_MVC\Controller\LoginController;
use Projeto_MVC\Controller\UsuarioController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    #ROTA LOGIN
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;


        # ROTAS USUARIO
    case '/usuario':
        UsuarioController::index();
    break;
    
    case '/usuario/form':
        UsuarioController::form();
    break;
    
    case '/usuario/save':
        UsuarioController::save();
    break;
    
    case '/usuario/delete':
        UsuarioController::delete();
    break;


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
        echo "/login";
    break;
}