<?php
    require "bd.php";

    $nome = $_POST['nomeProduto'];
    $categoria = $_POST['categoriaProduto'];
    $quantidade = $_POST['quantidadeProduto'];
    $valor = $_POST['valorProduto'];

    $query = "insert into produtos(nome_produto, categoria_produto, quantidade_produto, valor_produto)
    values('{$nome}',{$categoria}, {$quantidade}, {$valor})";

    $result = mysqli_query($conn, $query);

    
    header("Location: ../views/cadastroProduto.php?msg=true&produto=$nome");