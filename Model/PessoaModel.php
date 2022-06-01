<?php

namespace ProjetoPHP\Model;

use ProjetoPHP\DAO\PessoaDAO;

class PessoaModel
{
    /**
     * Declaração das propriedades conforme campos da tabela no banco de dados.
     */
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;

    public $rows;


    /**
     * Declaração do método save que chamará a DAO para gravar no banco de dados
     * o model preenchido.
     */
    public function save()
    {
        $dao = new PessoaDAO();

        // Se id for nulo, significa que trata-se de um novo registro
        // caso contrário, é um update poque a chave primária já existe.
        if(empty($this->id)) 
        {
            // No que estamos enviado o proprio objeto model para o insert, por isso do this
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PessoaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PessoaModel();

    }

    public function delete(int $id)
    {
        $dao = new PessoaDAO();

        $dao->delete($id);
    }

}