
<!DOCTYPE HTML>
<html>
	<head>
    <meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reporte Localidades</title>

		
	</head>
    <script type="text/javascript" src="jquerystyde.js"></script>

	<body>

    <?php 

    function conectarse(){
        $servidor = "localhost";
        $usuario = "root";
        $password ="";
        $bd ="styde";

        $conectar = new mysqli($servidor,$usuario,$password,$bd);
        return $conectar;
    }
    $conexion = conectarse();

 ?>

        <style type="text/css">
        ${demo.css}
                </style>
                <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Ocupacion Hotelera'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [

                       <?php 
                            $consulta="SELECT * FROM localidad";

                            $ejecutar  = $conexion->query(utf8_encode($consulta));

                            while ($registros = mysqli_fetch_array($ejecutar))
                            {
                            ?>
                                '<?php echo $registros[1]; ?>',
                            <?php
                            }
                        ?>

                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Cantidad',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ' cuartos'
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Año 2009',
                    data: [
                        
                        <?php 
                            $consulta="SELECT * FROM localidad";
                            $ejecutar  = $conexion->query(utf8_encode($consulta));
                            while ($registros = mysqli_fetch_array($ejecutar))
                            {
                            ?>
                                <?php echo $registros[2]; ?>,
                            <?php
                            }
                        ?>
                    
                    ]
                }]
            });
        });
        </script>

    
<script src="highcharts.js"></script>
<script src="exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
