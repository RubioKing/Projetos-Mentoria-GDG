<?php
    require "bd.php";

    $id = $_GET['id_categorias'];
    $query = "SELECT * FROM categorias WHERE id_categorias = {$id}";
    $result = mysqli_query($conn, $query);
    $lista = array();
    $cont = 0;

    while ($resultadoLinha = mysqli_fetch_assoc($result)) {
        $lista[$cont]['id_categorias'] = $resultadoLinha['id_categorias'];
        $lista[$cont]['nome_categoria'] = $resultadoLinha['nome_categoria'];
        $cont++;
    }

    return $lista;