<?php

namespace Projeto_MVC\Controller;

use Projeto_MVC\Model\UsuarioModel;

class UsuarioController extends Controller
{
    public static function index()
    {
        $model = new UsuarioModel();
        $model->getAllRows();

        include 'View/modules/Usuario/ListaUsuario.php';
    }

    public static function form()
    {
        $model = new UsuarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Usuario/FormUsuario.php';
    }

    public static function save()
    {
        $usuario = new UsuarioModel();

        $usuario->id = $_POST['id'];
        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->senha = $_POST['senha'];

        $usuario->save();

        header("Location: /usuario");
    }

    public static function delete()
    {
        $model = new UsuarioModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /usuario");
    }
}