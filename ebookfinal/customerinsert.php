

<script language="JavaScript">
<!--
function open()
{
window.location="customeregsuccess.php"
}

function redirect()
{
window.location="customeregfailure.php"
}

//-->
</script>
</head>
<body>

<?php
if(@mysql_connect("localhost","root","")&&@mysql_select_db('ebook'))
{}
else
echo "could not connect to database";
/*$last=0000000;
$query="SELECT * FROM customers";
  if($mysql_run=mysql_query($query))
    {
      while($query_row = mysql_fetch_assoc($mysql_run))
	{
	  $last=$query_row['customer_id'];
        }
        $last= substr($last,5);
        $last++; 
    }
    if($last=="")
      $last="aaaaaaaa0000000";*/

//$new=strtolower(substr($location[0]['geoplugin_region'],0,3).substr($location[0]['geoplugin_city'],0,2));
$customer_id=rand(1,1000000);
$customer_name=$_POST['name'];
$customer_username=$_POST['username'];
$customer_password=$_POST['password'];
$customer_mobile=$_POST['mobile'];
$customer_email=$_POST['emailid'];
$customer_address=$_POST['address'];

$query1="INSERT INTO customers VALUES ('".$customer_id."', '".$customer_username."', '".$customer_password."', '".$customer_name."', ".$customer_mobile.",'".$customer_email."', '".$customer_address."')";
mysql_query($query1);
if($query1)
{
echo '<script> open(); </script>';
 }
 echo '<script> redirect(); </script>';

mysql_close();
?>

