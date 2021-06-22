
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
            <li><a href="register.php">Register</a></li>
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
                <li><a href="logout.php">LOGIN</a></li>
            </ul>
        </div>
    </div>
    
    <!-- content-->
    <div id="content">
        
        <div id="content_left">
            <div class="content_left_section">
                <h1>Categories</h1>
                <ul>
                    <li><a href="viewallbooks.php">Architecture</a></li>
                    <li><a href="#" onclick="swap('sectionTwoLinks');return false;">>Engineering</a></li>
                         <ul id="sectionTwoLinks" style="display: none;">
                             <li><a href="aeronautical.php">Aeronautical</a></li>
                             <li><a href="viewallbooks.php">Bio-Technology</a></li>
                             <li><a href="viewallbooks.php">Chemical</a></li>
                             <li><a href="viewallbooks.php">Civil</a></li>
                             <li><a href="it.php">Computer Science and IT</a></li>
                             <li><a href="viewallbooks.php">Electrical, Electronics and Communication</a></li>
                              <li><a href="viewallbooks.php">Mechanical</a></li>
                        </ul>
                    <li><a href="#" onclick="swap('sectionThreeLinks');return false;">>Entrance Exams</a></li>
                         <ul id="sectionThreeLinks" style="display: none;">
                             <li><a href="iit.php">JEE Main and Advanced</a></li>
                             <li><a href="viewallbooks.php">CAT,MBA</a></li>
                             <li><a href="viewallbooks.php">IAS</a></li>
                             <li><a href="viewallbooks.php">SSC,BankPO</a></li>
                             <li><a href="viewallbooks.php">GATE,IES</a></li>
                             <li><a href="viewallbooks.php">GRE,GMAT,SAT</a></li>
                             <li><a href="viewallbooks.php">IELTS,TOEFL</a></li>
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
                    <li><a href="#" onclick="swap('sectionFiveLinks');return false;">>Non-Fiction</a></li>
                         <ul id="sectionFiveLinks" style="display: none;">
                             <li><a href="photography.php">Arts, Photography and Design</a></li>
                             <li><a href="cooking.php">Cooking, Food and Drink</a></li>
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
            <div class="product_box">
                <h1>aerodynamics <span>by XYZ</span></h1>
                <img src="images/image_06.jpg" alt="image" />
                <div class="product_info">
                    <p>brief introduction of aerodynamics...</p>
                    <h3>Rs.294</h3>
                    <div class="buy_now_button"><a href="subpageaeronautical.php">Buy Now</a></div>
                    <div class="detail_button"><a href="subpageaeronautical.php">Detail</a></div>
                </div>
        </div>
            
 
            
            
        
        </div> 
    
        <div class="cleaner_with_height">&nbsp;</div>
    </div>
    <!--footer-->
    <div id="footer">
    
        <a href="bookhome.php">Home</a> | <a href="aboutus.php">About Us</a> | <a href="faq.php">FAQs</a> | <a href="contactus.php">Contact Us</a><br />
        <strong>By Shivaranjini Shankar and Esha Pare</strong>
    </div> 
    
</div> <!-- end of container -->
</body>
</html>
