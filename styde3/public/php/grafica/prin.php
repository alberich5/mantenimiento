<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="jquery.1.7.1.js"></script>
		<style type="text/css">
            ${demo.css}
            		</style>
            		<script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    title: {
                        text: 'Monthly Average Temperature',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'Source: WorldClimate.com',
                        x: -20
                    },
                    xAxis: {
                        categories: [
                        <?php 
                            $link = mysql_connect("localhost", "root")or die('no se pudo realizar la conexion'); 
                            mysql_select_db("styde", $link)or die('no se encuentra la bd'); 
                             $result = mysql_query("SELECT * FROM localidad", $link); 
                            while ($row = mysql_fetch_row($result))
                            {
                            ?>

                                '<?php echo $row [1]; ?>',
                            <?php
                            }
                         ?>    


                        ]
                    },
                    yAxis: {
                        title: {
                            text: 'Temperature (°C)'
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                    },
                    tooltip: {
                        valueSuffix: '°C'
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle',
                        borderWidth: 0
                    },
                    series: [{
                        name: 'Tokyo',
                        data: [
                            '1',
                            
                                '2',
                            
                                '3',
                            
                                '4',
                            
                                '5',
                            
                                '6',
                            
                                '7',
                            
                                '8'
                        ]
                    }]
                });
            });
		</script>
	</head>
	<body>
<script src="highcharts.js"></script>
<script src="exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
