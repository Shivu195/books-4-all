<?php
ob_start();
session_start();
$current_page=$_SERVER['SCRIPT_NAME'];
/*if(ISSET($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];
*/
function loggedin(){
if(isset($_SESSION['costumer_id'])&&!EMPTY($_SESSION['costumer_id']))
return true;
else return false;
}

function get($field){
$query="SELECT `".$field."` FROM `costumers` WHERE `costumer_id`='".$_SESSION['costumer_id']."'";
	if($query_run=mysql_query($query))
	{
	if($query_result= mysql_result($query_run,0,$field))
	return $query_result;
	}
}
?>