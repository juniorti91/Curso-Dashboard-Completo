<?php 
    include 'conexao/conexao.php';

    $mes = $_POST['mes'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO clientes (mes_cliente, quantidade) VALUES ('$mes', $quantidade)";

    $inserir = mysqli_query($conexao, $sql);

    header('Location: dashboard.php?pagina=clientes'); // Codigo para após inserir os dados vendas voltar a pagina de vendas novamente
?>