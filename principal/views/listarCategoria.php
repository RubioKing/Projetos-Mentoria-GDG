<?php
    require_once "header.php";
    $listaDeProdutos = require "../bd/listarCategoriaBd.php";
    
?>

<div class="container" style="padding-top:4%;">
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Código da Categoria</th>
        <th scope="col">Nome da Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaDeProdutos as $key => $value) { ?>
        <tr>
        <td><?= $value['id_categorias'] ?></td>
        <td><?= $value['nome_categoria'] ?></td>
        <td><a href="editarCategoria.php?id_categorias=<?= $value['id_categorias']?>" class="btn btn-primary">Editar</a></td>
        <td><a href="../bd/excluiCategoriaBd.php?id_categorias=<?= $value['id_categorias']?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>

<?php
    require_once "footer.php";
?>