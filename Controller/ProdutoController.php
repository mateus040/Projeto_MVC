<?php

namespace Projeto_MVC\Controller;

use Projeto_MVC\Model\ProdutoModel;

class ProdutoController extends Controller
{

    public static function index()
    {
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ListaProduto.php';
    }

    public static function form()
    {
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Produto/FormProduto.php';
    }

    public static function save()
    {
        $produto = new ProdutoModel(); 

        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $produto->descricao = $_POST['descricao'];

        $produto->save();

        header("Location: /produto"); 

    }

    public static function delete()
    {
        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /produto");
    }


}