<?php
    require_once "header.php";
    $listaDeProdutos = require "../bd/listarProdutosBd.php";
    
?>

<div class="container" style="padding-top:4%;">
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Código do Produto</th>
        <th scope="col">Nome</th>
        <th scope="col">Código da Categoria</th>
        <th scope="col">Nome da Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaDeProdutos as $key => $value) { ?>
        <tr>
        <td><?= $value['id_produto'] ?></td>
        <td><?= $value['nome_produto'] ?></td>
        <td><?= $value['id_categorias'] ?></td>
        <td><?= $value['nome_categoria'] ?></td>
        <td><a href="#" class="btn btn-primary">Editar</a></td>
        <td><a href="../bd/excluiProdutoBd.php?id_produto=<?= $value['id_produto']?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>

<?php
    require_once "footer.php";
?>