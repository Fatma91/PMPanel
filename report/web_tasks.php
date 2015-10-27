<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '222222';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = 'select count(id) as `num` ,month(`timestamp`)as `date` from tasks where state=6 group by month(`timestamp`) ';

mysql_select_db('agilefantdb');
$data = mysql_query( $sql, $conn );

$arr2 = array () ; 
while($arr =  mysql_fetch_assoc ($data))
	{

	 $arr2 [] = $arr; 	
	}
echo json_encode($arr2);

mysql_close($conn);

?>

