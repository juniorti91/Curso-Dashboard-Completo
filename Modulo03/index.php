<?php 

    include 'conexao/conexao.php';

    $sql = "SELECT * FROM lucros";
    $buscar = mysqli_query($conexao, $sql);

    #chart.js - Preparando valores#

    $mes = '';
    $ano_2018 = '';
    $ano_2019 = '';


    while ($dados = mysqli_fetch_array($buscar)) {
        
        $mes = $mes . '"' . $dados['mes'] . '",';
        $ano_2018 = $ano_2018 . '"' . $dados['ano_2018'] . '",';
        $ano_2019 = $ano_2019 . '"' . $dados['ano_2019'] . '",';


        $mes = trim($mes); #tira os espaços da variavel
        $ano_2018 = trim($ano_2018);
        $ano_2019 = trim($ano_2019);
    }
?>