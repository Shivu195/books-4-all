<html>
<head>
<title>SE Books</title>
<link href="booksstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function swap(targetId){
  if (document.getElementById){
        target = document.getElementById(targetId);
            if (target.style.display == "none"){
                target.style.display = "";
            } else{
                target.style.display = "none";
            }
                
  }
}
</script>
</head>
<body>
<div id="container">
    <!-- menu-->
	<div id="menu">
    	<ul>
            <li><a href="bookhome.php" class="current">Home</a></li>
            <li><a href="viewallbooks.php">View All Books</a></li>
            <li><a href="sellpage.php">Sell Books</a></li>			
            <li><a href="aboutus.php">About Us</a></li> 
            <li><a href="contactus.php">Contact</a></li>
    	</ul>
    </div>
	
    <!-- header-->
    <div id="header">
    	<div id="special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over Rs.1000
        	</p>
        </div>
        
        
        <div id="login">
        	<ul>
                <li><a href="logout.php">LOGOUT</a></li>
				
            </ul>
        </div>
    </div>
	
    <!-- content-->
    <div id="content">
    	
        <div id="content_left">
        	<div class="content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="#" onclick="swap('sectionTwoLinks');return false;">>Engineering</a></li>
					     <ul id="sectionTwoLinks" style="display: none;">
                             
                             <li><a href="viewallbooks.php">Chemical<?php $category="chemical";?></a></li>
                             
							 <li><a href="viewallbooks.php">Computer Science and IT<?php $category="compsc";?></a></li>
							 <li><a href="viewallbooks.php">Electrical, Electronics and Communication<?php $category="ece";?></a></li>
							  <li><a href="viewallbooks.php">Mechanical<?php $category="mechanical";?></a></li>
                        </ul>
                    <li><a href="#" onclick="swap('sectionThreeLinks');return false;">>Entrance Exams</a></li>
					     <ul id="sectionThreeLinks" style="display: none;">
                             <li><a href="viewallbooks.php">JEE Main and Advanced<?php $category="jee";?></a></li>
                             <li><a href="viewallbooks.php">CAT,MBA<?php $category="mba";?></a></li>
							 <li><a href="viewallbooks.php">GRE,GMAT,SAT<?php $category="gre";?></a></li>
							 
                        </ul>
                    <li><a href="#" onclick="swap('sectionFourLinks');return false;">>Literature and Fiction</a></li>
					     <ul id="sectionFourLinks" style="display: none;">
                             <li><a href="action.php">Action and Adventure</a></li>
                             <li><a href="viewallbooks.php">Classics</a></li>
                             <li><a href="viewallbooks.php">Crime and Mystery Thrillers</a></li>
                             <li><a href="viewallbooks.php">Horror</a></li>
							 <li><a href="viewallbooks.php">Love and Romance</a></li>
							 <li><a href="viewallbooks.php">Poetry</a></li>
                        </ul>
                    <li><a href="#">Non-Fiction</a></li>
                    
            	</ul>
            </div>
			<div class="content_left_section">
            	<h1>Other</h1>
                <ul>
                    <li><a href="viewallbooks.php">Antique and Rare</a></li>
					<li><a href="viewallbooks.php">Magazines and Periodicals</a></li>
            	</ul>
            </div>
            
        </div> 
		
		
		