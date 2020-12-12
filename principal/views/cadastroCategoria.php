<?php
    require_once "header.php";
    $listaDeCategorias = require "../bd/listarCategoriaBd.php";
?>


    <div class="container">
        <form method="POST" action="../bd/cadastroCategoriaBd.php" class="teste">
        <div class="form-group">
            <label for="nomeCategoria">Categoria</label>
            <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" onclick="msg()">Submit</button>
        
        </form>
        <button class="btn btn-primary" onclick="msg()">asd</button>
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