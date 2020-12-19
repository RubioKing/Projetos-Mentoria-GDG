<?php
    require "bd.php";

    $id = $_GET['id_produto'];
    
    $query = "DELETE FROM produtos where id_produto = {$id}";

    $exec = mysqli_query($conn, $query);

    header("Location: ../views/listarProduto.php?msg=true&produto=$nome");