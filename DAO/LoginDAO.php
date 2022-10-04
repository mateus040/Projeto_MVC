<?php

namespace Projeto_MVC\DAO;

use Projeto_MVC\Model\LoginModel;
use \PDO;

class LoginDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectByEmailAndSenha($email, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = sha1(?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("Projeto_MVC\Model\LoginModel");
    }
}