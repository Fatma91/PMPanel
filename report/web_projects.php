<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '222222';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = 'select count(id) as `num` , MONTH(start) as `date` from Projects group by MONTH(start)';

mysql_select_db('PMPanel');
$data = mysql_query( $sql, $conn );
$arr2 = array () ; 
while($arr =  mysql_fetch_assoc ($data))
{
 $arr2 [] = $arr; 	
}
echo json_encode($arr2);

mysql_close($conn);

?>


