<?php
    require "bd.php";

    $categoria = $_POST['nomeCategoria'];
    $idCategoria = $_POST['idCategoria'];

    $query = "UPDATE categorias set nome_categoria = '{$categoria}' WHERE id_categorias = {$idCategoria}";

    $result = mysqli_query($conn, $query);

    //echo $query;

    header("Location: ../views/listarCategoria.php?msg=true&produto=$nome");