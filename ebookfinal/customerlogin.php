<?php 
require_once 'connect.inc.php';
require_once 'core.inc.php';
?>
<!doctype html>
<title>
Books4All
</title>
<head>
<style>
.details{
	    background:#f1f1f1; width:470px; margin:0 auto; padding-left:50px; padding-top:20px; padding-bottom:20px;
	}*:focus {outline: none;}
	.details label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }
	.details input { width: 250px; height:30px; border-radius:5px; }
	.menu
	{
	float:left;
	list-style-type: none;
	padding:15px;
	border-radius: 6px;
	position:fixed;
	z-index:15;
	background-color:rgba(240,206,46,1);
	color:white;
	margin-top:0px;
	margin-left:20px;
	font-size:20px;
	
	}
	
	</style>
	
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--script src="js/modernizr.custom.js"></script-->
		
		
</head>
<body>
<ul class="menu">
<a href="index.php"><li style="padding-bottom:10px;">Customer Registration</li></a>
<a href="customerlogin.php"><li style="padding-bottom:10px;">Customer login</li></a>
<!--a href="shopreg.php"><li style="padding-bottom:10px;">Shop Registration</li></a>
<a href="shoplogin.php"><li>Shop Login</li></a-->
</ul>

<center>
<h1 class="heading">Books4All</h1>
<h3 class="please">Online solution to your favorite books</h3></center>
<div class="container" style="margin-bottom:30px;">
<form name="details" class="details" enctype="multipart/form-data" onsubmit="return validate()" method="POST" action="signin.php">
 <p class="contact"><label for="name"> Username:</label></p>
         <input id="emailid" name="emailid" placeholder="Enter username" required="" tabindex="1" type="text"> 
		 <p class="contact"><label for="password">Password:</label></p>
         <input id="password" name="password" placeholder="  Enter password" required="" tabindex="1" type="password"> 
		 
		 <p><input type="submit" value="Submit" name="submit" class="progress-button" data-style="fill" data-horizontal></p>
		<?php if(isset($_SESSION['not_correct']))
				if($_SESSION['not_correct']=="no")
				echo "<script> alert('Username and Password combination not correct!'); </script>";
				?>
		 </form>
		 </div>

		 <!--script src="js/classie.js"></script>
		<script src="js/progressButton.js"></script>
		<script>
			[].slice.call( document.querySelectorAll( 'button.progress-button' ) ).forEach( function( bttn ) {
				new ProgressButton( bttn, {
					callback : function( instance ) {
						var progress = 0,
							interval = setInterval( function() {
								progress = Math.min( progress + Math.random() * 0.1, 1 );
								instance._setProgress( progress );

								if( progress === 1 ) {
									instance._stop(1);
									clearInterval( interval );
								}
							}, 200 );
					}
				} );
			} );
		</script-->
		
</body>
</html>