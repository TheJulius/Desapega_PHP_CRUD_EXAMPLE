<?php

require_once "Produto.php";
require_once "ProdutoDao.php";

$produto = new Produto();
$produto->setNome('teste');
$produto->setCor('azul');
$produto->setTamanho('grande');

$produtoDao =  new ProdutoDao();
$produtoDao->create($produto);

?>