<?php

namespace Projeto_MVC\Controller;

use Projeto_MVC\Model\FuncionarioModel;

class FuncionarioController
{
    public static function index()
    {
        $model = new FuncionarioModel();
        $model->getAllRows();

        include 'View/modules/Funcionario/ListaFuncionario.php';
    }

    public static function form()
    {
        $model = new FuncionarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save()
    {
        $funcionario = new FuncionarioModel();

        $funcionario->id = $_POST['id'];
        $funcionario->nome = $_POST['nome'];
        $funcionario->cargo = $_POST['cargo'];

        $funcionario->save();

        header("Location: /funcionario");
    }

    public static function delete()
    {
        $model = new FuncionarioModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /funcionario");
    }
}