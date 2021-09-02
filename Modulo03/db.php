<?php 
    $servername = "mysql873.umbler.com:41890";
    $username = "juniordash2";
    $password = "157486ba";
    $dbname = "";

    $conexao = mysqli_connect($servername, $username, $password, $dbname);

        // Create database ----------------------------------------------------------------
    $sql = "CREATE DATABASE IF NOT EXISTS junior_vendas";

    if (mysqli_query($conexao, $sql)) {
        echo "Banco de Dados criado com Sucesso<br>";
    } else {
        echo "Erro: " . mysqli_error($conexao) . "<br>";
    }

    $dbname = 'junior_vendas';
    mysqli_select_db($conexao, $dbname);

    if (!$conexao) {
        die("Select falhou.: " .mysqli_connect_error());
    }

        //create acceleration table........................................................
    $sql = "CREATE TABLE IF NOT EXISTS `lucros` (
        `mes` VARCHAR(50) NOT NULL,
        `ano_2018` VARCHAR(50) NOT NULL,
        `ano_2019` VARCHAR(50) NOT NULL,
        `id` INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (`id`))";

    if (mysqli_query($conexao, $sql)) {
        echo "Tabela criada com sucesso<br>";
    } else {
        echo "Erro: ". mysqli_error($conexao). "<br>";
    }

    $query = "INSERT INTO lucros (mes, ano_2018, ano_2019) VALUES ('Janeiro', '120.16', '210.15'), ('Fevereiro', '420.40', '225.80'), ('Março', '310', '55.90'), ('Abril', '650.33', '308.10'), ('Maio', '200', '416.65')";

    $conexao->query($query);
    mysqli_close($conexao);
