<?php
    require "bd.php";

    $query = "SELECT * FROM produtos P
    JOIN categorias C ON C.id_categorias = P.categoria_produto";
    $result = mysqli_query($conn, $query);
    $lista = array();
    $cont = 0;

    while ($resultadoLinha = mysqli_fetch_assoc($result)) {
        $lista[$cont]['id_categorias'] = $resultadoLinha['id_categorias'];
        $lista[$cont]['nome_categoria'] = $resultadoLinha['nome_categoria']; 

        $lista[$cont]['id_produto'] = $resultadoLinha['id_produto'];
        $lista[$cont]['nome_produto'] = $resultadoLinha['nome_produto'];

        $cont++;
    }

    return $lista;