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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico Linha</title>
</head>
<body>

    <script type="text/javascript">
        
    </script>
    
</body>
</html>