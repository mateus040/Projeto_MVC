<?php

namespace Projeto_MVC\Controller;

use Projeto_MVC\Model\categoria_produtoModel;

class categoria_produtoController
{

    /**
     * Os métodos index serão usados para devolver uma View.
     */
    public static function index()
    {
        $model = new categoria_produtoModel();
        $model->getAllRows();

        include 'View/modules/categoria_produto/ListaCategoria.php';
    }


   /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        $model = new categoria_produtoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);


        include 'View/modules/categoria_produto/FormCategoria.php';
    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save()
    {
        // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
        // pelo usuário no formulário (note o envio via POST)
        $categoria_produto = new categoria_produtoModel();

        $categoria_produto->id = $_POST['id'];
        $categoria_produto->descricao = $_POST['descricao'];

        $categoria_produto->save(); // chamando o método save da model.

        header("Location: /categoria_produto"); 
    }

    public static function delete()
    {
        $model = new categoria_produtoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /categoria_produto");
    }
}