<?php
    require_once "header.php";
    $categoria = require "../bd/buscarCategoriaId.php";
    echo '<pre>';
    print_r($categoria);
    echo '</pre>';
?>


    <div class="container">
        <form method="POST" action="../bd/editarCategoriaBd.php" class="teste">
        <div class="form-group">
            <label for="idCategoria">Id</label>
            <input type="text" value="<?= $categoria[0]['id_categorias'] ?>" class="form-control" readonly id="idCategoria" name="idCategoria" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="nomeCategoria">Categoria</label>
            <input type="text" value="<?= $categoria[0]['nome_categoria'] ?>" class="form-control" id="nomeCategoria" name="nomeCategoria" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" onclick="msg()">Submit</button>
        
        </form>
    </div>

<?php
    require_once "footer.php";
?>
<script>
    $('#valorProduto').mask('000.00', {reverse: true});

    
    $cont = 0;


    jQuery(document).ready(function($)
        {

                var opts = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-bottom-left",
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                if($cont == 1)
                {
                    $.toast({
                        heading: 'Information',
                        text: 'Loaders are enabled by default. Use `loader`, `loaderBg` to change the default behavior',
                        icon: 'info',
                        loader: true,        // Change it to false to disable loader
                        loaderBg: '#9EC600'  // To change the background
                    })

                    $cont = 0;
                }
        });
    
    function msg($cont) {
        $cont = 1;
    }
    

</script>