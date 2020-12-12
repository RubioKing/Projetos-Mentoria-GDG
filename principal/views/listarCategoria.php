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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaDeProdutos as $key => $value) { ?>
        <tr>
        <td><?= $value['id_categorias'] ?></td>
        <td><?= $value['nome_categoria'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>

<?php
    require_once "footer.php";
?>