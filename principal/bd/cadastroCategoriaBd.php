<?php
    require "bd.php";

    $categoria = $_POST['nomeCategoria'];

    $query = "insert into categorias(nome_categoria)
    values('{$categoria}')";

    $result = mysqli_query($conn, $query);

    
    header("Location: ../views/cadastroProduto.php?msg=true&produto=$nome");