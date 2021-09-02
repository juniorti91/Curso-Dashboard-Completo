<html>
  <head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
=======
<<<<<<< HEAD
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
=======
<<<<<<< HEAD
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
=======
>>>>>>> 09b606d (18-08-2021 23:07)
>>>>>>> 5c97ae3 (18-08-2021 23:18)
>>>>>>> e7026e2 (18-08-2021 23:23)
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'Populaçao', {role: 'annotation'}],
          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM cidades";
            $buscar = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($buscar)) {
                $cidade = $dados['cidade'];
                $populacao = $dados['populacao'];
          ?>

          ['<?php echo $cidade; ?>',  <?php echo $populacao; ?>, <?php echo $populacao; ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Meu Primeiro Gráfico',
<<<<<<< HEAD
          curveType: 'function',
          legend: { position: 'right' }
=======
<<<<<<< HEAD
          curveType: 'function',
          legend: { position: 'right' }
=======
<<<<<<< HEAD
          curveType: 'function',
          legend: { position: 'right' }
=======
          // curveType: 'function',
          legend: { position: 'top' }
>>>>>>> 09b606d (18-08-2021 23:07)
>>>>>>> 5c97ae3 (18-08-2021 23:18)
>>>>>>> e7026e2 (18-08-2021 23:23)
        };

        var chart = new google.visualization.LineChart(document.getElementById('graficoLinha'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
<<<<<<< HEAD
    <div id="graficoLinha" style="width: 900px; height: 500px"></div>
=======
<<<<<<< HEAD
    <div id="graficoLinha" style="width: 900px; height: 500px"></div>
=======
<<<<<<< HEAD
    <div id="graficoLinha" style="width: 900px; height: 500px"></div>
=======
    <div id="graficoLinha" style="height: 400px; width: 1000px"></div>
>>>>>>> 09b606d (18-08-2021 23:07)
>>>>>>> 5c97ae3 (18-08-2021 23:18)
>>>>>>> e7026e2 (18-08-2021 23:23)
  </body>
</html>

