<?php

namespace Projeto_MVC\Model;

use Projeto_MVC\DAO\FuncionarioDAO;

class FuncionarioModel extends Model
{
    public $id, $nome, $cargo;


    public function save()
    {       
        $dao = new FuncionarioDAO();

        if(empty($this->id))
        {
            $dao->insert($this);

        } else {

            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new FuncionarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new FuncionarioModel();
    }

    public function delete(int $id)
    {
        $dao = new FuncionarioDAO();

        $dao->delete($id);
    }
}