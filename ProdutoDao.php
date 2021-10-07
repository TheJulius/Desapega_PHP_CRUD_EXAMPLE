<?php

require_once "Conexao.php";

class ProdutoDao{

    public function create(Produto $p){

        $sql = 'INSERT INTO product(nome,cor,tamanho) VALUES (?,?,?)';

        $stmt  = Conexao::getInstance()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getCor());
        $stmt->bindValue(3, $p->getTamanho());
        
        $stms->execute();
    }

    public function read(){

    }

    public function update(Produto $p){

    }

    public function delete($id){

    }

}

?>