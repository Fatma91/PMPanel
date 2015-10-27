<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '222222';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = 'SELECT COUNT( bug_id ) as `num` , MONTH( deadline ) AS `date` FROM bugs GROUP BY MONTH( deadline )';

mysql_select_db('bugzilla');
$data = mysql_query( $sql, $conn );
$arr2 = array () ; 
while($arr =  mysql_fetch_assoc ($data))
	{
	 $arr2 [] = $arr; 	
	}
echo json_encode($arr2);

mysql_close($conn);

?>


