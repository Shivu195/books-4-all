
<html>
<head>
<title>book</title>
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
    <!--menu-->
	<div id="menu">
    	<ul>
            <li><a href="bookhome.php" class="current">Home</a></li>
            <!--li><a href="register.php">Register</a></li-->
            <li><a href="viewallbooks.php">View All Books</a></li>
            <li><a href="sellpage.php">Sell Books</a></li>			
            <li><a href="aboutus.php">About Us</a></li> 
            <li><a href="contactus.php">Contact</a></li>
		</ul>
    </div>
    
	<!--header-->
    <div id="header">
    	<div id="special_offers">
        	<p>
                <span>25%</span> discounts for
				purchase over Rs.1000
        	</p>
        </div>
        
        
        <div id="login">
        	<ul>
                <li><a href="logout.php">LOGIN</a></li>
            </ul>
        </div>
    </div> 
        <!--content-->
    <div id="content">
    	
        <div id="content_left">
        	<div class="content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="viewallbooks.php">Architecture</a></li>
                    <li><a href="#" onclick="swap('sectionTwoLinks');return false;">>Engineering</a></li>
					     <ul id="sectionTwoLinks" style="display: none;">
                             <li><a href="viewallbooks.php">Aeronautical</a></li>
                             <li><a href="viewallbooks.php">Bio-Technology</a></li>
                             <li><a href="viewallbooks.php">Chemical</a></li>
                             <li><a href="viewallbooks.php">Civil</a></li>
							 <li><a href="viewallbooks.php">Computer Science and IT</a></li>
							 <li><a href="viewallbooks.php">Electrical, Electronics and Communication</a></li>
							  <li><a href="viewallbooks.php">Mechanical</a></li>
                        </ul>
                    <li><a href="#" onclick="swap('sectionThreeLinks');return false;">>Entrance Exams</a></li>
					     <ul id="sectionThreeLinks" style="display: none;">
                             <li><a href="viewallbooks.php">JEE Main and Advanced</a></li>
                             <li><a href="viewallbooks.php">CAT,MBA</a></li>
                             <li><a href="viewallbooks.php">IAS</a></li>
                             <li><a href="viewallbooks.php">SSC,BankPO</a></li>
							 <li><a href="viewallbooks.php">GATE,IES</a></li>
							 <li><a href="viewallbooks.php">GRE,GMAT,SAT</a></li>
							 <li><a href="viewallbooks.php">IELTS,TOEFL</a></li>
                        </ul>
                    <li><a href="#" onclick="swap('sectionFourLinks');return false;">>Literature and Fiction</a></li>
					     <ul id="sectionFourLinks" style="display: none;">
                             <li><a href="viewallbooks.php">Action and Adventure</a></li>
                             <li><a href="viewallbooks.php">Classics</a></li>
                             <li><a href="viewallbooks.php">Crime and Mystery Thrillers</a></li>
                             <li><a href="viewallbooks.php">Horror</a></li>
							 <li><a href="viewallbooks.php">Love and Romance</a></li>
							 <li><a href="viewallbooks.php">Poetry</a></li>
                        </ul>
                    <li><a href="#" onclick="swap('sectionFiveLinks');return false;">>Non-Fiction</a></li>
					     <ul id="sectionFiveLinks" style="display: none;">
                             <li><a href="viewallbooks.php">Arts, Photography and Design</a></li>
                             <li><a href="viewallbooks.php">Cooking, Food and Drink</a></li>
                             <li><a href="viewallbooks.php">Language and Linguistics</a></li>
                             <li><a href="viewallbooks.php">Self-Help Books</a></li>
							 <li><a href="viewallbooks.php">Psychology</a></li>
							 <li><a href="viewallbooks.php">Religion and Spirituality</a></li>
                        </ul>
                    <li><a href="viewallbooks.php">Coffee Table Books</a></li>
                    <li><a href="viewallbooks.php">Management Books</a></li>
            	</ul>
            </div>
			<div class="content_left_section">
            	<h1>Other</h1>
                <ul>
                    <li><a href="viewallbooks.php">Antique and Rare</a></li>
                    <li><a href="#" onclick="swap('sectionSixLinks');return false;">>Children's Books</a></li>
					    <ul id="sectionSixLinks" style="display: none;">
                             <li><a href="viewallbooks.php">Novels</a></li>
                             <li><a href="viewallbooks.php">Comics and Graphic</a></li>
						</ul>
					<li><a href="viewallbooks.php">Magazines and Periodicals</a></li>
            	</ul>
            </div>
            
        </div> 
        
        <div id="content_right">
        	
            <h1>About Us</h1>
           <p>Hola! Greetings from Books4All Team!</p>

           <p>Books4All is an online solution for the sale and purchase of old books. We believe that there's no such thing as a used book.A book is the one thing, the one product, that is forever new. </p>

           <p>We have designed a simple platform for our users where they can upload their old books for selling to a large number of customers. At the same time, we provide a convenient market place to our customers for purchasing used books at reasonable prices.</p>

           <p><u>For Sellers:</u></p>
           <p>Sellers will love Books4All as they get access to a large customer base and are able to sell their old books at reasonable prices. We do not charge any registration fee from our sellers and they can sell as many books as they like!</p>

           <p><u>For Buyers:</u></p>
           <p>We provide plenty of benefits to the buyers which include Free home delivery and Flexible book-return policy. We work hard to ensure that the books sold on Books4All are in a good condition and consistently keep a check on the quality of the books. We also ensure that the books are delivered to our customers on time.</p>

           <p>Thus, Books4All provides a sense of security and deep comfort to both the buyers and the sellers.</p>

           <p>Cheers!</p>
                       
        </div>
    
    </div> 
    
    <!--footer-->
    <div id="footer">
	    <a href="index.php">Home</a> | <a href="aboutus.php">About Us</a> | <a href="faq.php">FAQs</a> | <a href="contactus.php">Contact Us</a><br />
        <strong>By Shivaranjini Shankar and Esha Pare</strong>
	</div> 
</div> <!-- end of container -->
</body>
</html>