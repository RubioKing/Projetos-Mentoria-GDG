<?php
    require "bd.php";

    $id = $_GET['id_categorias'];
    
    $query = "DELETE FROM categorias where id_categorias = {$id}";

    $exec = mysqli_query($conn, $query);

    header("Location: ../views/listarCategoria.php?msg=true&produto=$nome");