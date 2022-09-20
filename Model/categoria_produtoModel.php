<?php

namespace Projeto_MVC\Model;

use Projeto_MVC\DAO\categoria_produtoDAO;

class categoria_produtoModel extends Model
{

    /**
     * Declaração das propriedades conforme campos da tabela no banco de dados.
     */
    public $id, $descricao;


    /**
     * Declaração do método save que chamará a DAO para gravar no banco de dados
     * o model preenchido.
     */
    public function save()
    {

        // Se id for nulo, significa que trata-se de um novo registro
        // caso contrário, é um update poque a chave primária já existe.

        $dao = new categoria_produtoDAO;

        if(empty($this->id))
        {
            $dao->insert($this);

        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new categoria_produtoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new categoria_produtoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new categoria_produtoModel();
    }

    public function delete(int $id)
    {
        $dao = new categoria_produtoDAO();

        $dao->delete($id);
    }
}