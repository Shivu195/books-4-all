 <?php

if(@mysql_connect('localhost','root','')&&@mysql_select_db('ebook'))
{	
}
else
{ echo 'database not connected';
}

?>