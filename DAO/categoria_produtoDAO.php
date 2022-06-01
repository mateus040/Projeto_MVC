<?php

namespace ProjetoPHP\DAO;

use ProjetoPHP\Model\categoria_produtoModel;
use \PDO;

class categoria_produtoDAO
{

    /**
     * Atributo (ou Propriedade) da classe destinado a armazenar o link (vínculo aberto)
     * de conexão com o banco de dados.
     */


    private $conexao;


    /**
     * Método construtor, sempre chamado na classe quando a classe é instanciada.
     * Exemplo de instanciar classe (criar objeto da classe):
     * $dao = new PessoaDAO();
     * Neste caso, assim que é instânciado, abre uma conexão com o MySQL (Banco de dados)
     * A conexão é aberta via PDO (PHP Data Object) que é um recurso da linguagem para
     * acesso a diversos SGBDs.
     */


    function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_cadastro";
        $user = "root";
        $pass = "etecjau";  


        // Criando a conexão e armazenado na propriedade definida para tal.
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    /**
     * Método que recebe um model e extrai os dados do model para realizar o insert
     * na tabela correspondente ao model. Note o tipo do parâmetro declarado.
     */
    function insert(categoria_produtoModel $model)
    {

        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare   
        $sql = "INSERT INTO categoria_produto (descricao) VALUES (?)";


        // Declaração da variável stmt que conterá a montagem da consulta. Observe que
        // estamos acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        // Ao fim, onde todo SQL está montando, executamos a consulta.
        $stmt->execute();
    }
    
    public function update(categoria_produtoModel $model)
    {
        $sql = "UPDATE categoria_produto SET descricao=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM categoria_produto";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM categoria_produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProjetoPHP\Model\categoria_produtoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}