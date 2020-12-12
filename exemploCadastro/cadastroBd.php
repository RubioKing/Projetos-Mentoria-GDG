<?php

require "bd.php";

$nome = $_POST["nomeCaminhao"];
$marca = $_POST["marcaCaminhao"];
$sqlSalvarCaminhao = "insert into caminhoes(nome_caminhao, marca_caminhao) values('{$nome}', '{$marca}')";
$result = mysqli_query($conexao, $sqlSalvarCaminhao);