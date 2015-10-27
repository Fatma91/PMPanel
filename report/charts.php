<?php
// Getting json from url
 $json = file_get_contents('http://localhost/web.php');
 
 $obj = json_decode($json,true);
 $keys = json_encode (array_column($obj, 'MONTH(start)'));/*array_keys ($obj)*/


$values = json_encode (array_map('intval',array_column($obj, 'projects'))    );

 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>HighCharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    var xat = '<?php echo $keys?>';
    var yat = '<?php echo $values?>';
    yat = JSON.parse(yat);
    xat = JSON.parse(xat);

    

    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Projects'
        },
//        subtitle: {
//            text: 'Source: WorldClimate.com'
//        },
        xAxis: {
            categories: xat/*[
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ]*/,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number Of Projects (per month)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} project</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Projects',
            data: yat/*[49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]*/

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
