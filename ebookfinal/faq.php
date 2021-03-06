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
            <li><a href="register.php">Register</a></li>
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
        	
            <h1>FAQs</h1>
			<h3>Buyers</h3>
            <p><a href="#" onclick="swap('faqb1');return false;">1. Why should I buy books from Books4All?</a></p>
			<p id="faqb1" style="display: none; color: white; font-weight: normal;">We provide comfort and security to both the buyer and the seller. We consistently keep a check on the quality of the books and also ensure that the books are delivered on time. We provide a host of other benefits to our users including free home delivery, secure payment options and flexible book-return policy.</p>
			<p><a href="#" onclick="swap('faqb2');return false;">2. Do I need to register before I can start buying books?</a></p>
			<p id="faqb2" style="display: none; color: white; font-weight: normal;">No. You do not need to register before buying books from Books4All.</p>
			<p><a href="#" onclick="swap('faqb3');return false;">3. What is the delivery procedure and time schedule?</a></p>
			<p id="faqb3" style="display: none; color: white; font-weight: normal;">For all areas serviced by reputed couriers, the delivery time will be 5 business days. For other areas, orders will be sent by Registered Post through the Indian Postal Service which may take 1-2 weeks depending on the location. Business days exclude public holidays and Sundays.</p>
			<p><a href="#" onclick="swap('faqb4');return false;">4. Can I return the books in case I am not satisfied with the condition/quality?</a></p>
			<p id="faqb4" style="display: none; color: white; font-weight: normal;">Yes. You may return the books if the condition/quality of the books is not as per your expectations. For timely processing, you are required to inform us about the same within 24 hours of the receipt of the books. The courier/delivery charges for the reverse shipment would be borne by the buyer. The payment would be refunded to your account as soon as the books are received back.</p>
			<p><a href="#" onclick="swap('faqb5');return false;">5. How do I make payment for a book?</a></p>
			<p id="faqb5" style="display: none; color: white; font-weight: normal;">You may use our Online Secure Payment System to make the payments. In case you are facing any difficulties with the system</p>
			<br><h3>Sellers</h3>
			<p><a href="#" onclick="swap('faqs1');return false;">1. Why should I sell books through Books4All?</a></p>
			<p id="faqs1" style="display: none; color: white; font-weight: normal;">We provide a hassle-free platform to sell your old books and receive payments directly into your bank account. We provide you with large number of customers who are willing to purchase your old books at reasonable prices.</p>
			<p><a href="#" onclick="swap('faqs2');return false;">2. Do I need to register before I can start selling?</a></p>
			<p id="faqs2" style="display: none; color: white; font-weight: normal;">Yes. You need to register with Books4All in order to authenticate yourself and Start selling!</p>
			<p><a href="#" onclick="swap('faqs3');return false;">3. Do I need to pay for registering with Books4All?</a></p>
			<p id="faqs3" style="display: none; color: white; font-weight: normal;">No. You can create a Books4All account for FREE and Start selling your books today!</p>
			<p><a href="#" onclick="swap('faqs4');return false;">4. Is there a limit to the number of books I can sell?</a></p>
			<p id="faqs4" style="display: none; color: white; font-weight: normal;">No. You may sell as many books as you like as long as they satisfy the condition/quality requirements of Books4All!</p>
			<p><a href="#" onclick="swap('faqs5');return false;">5. How will I send the books to the buyer and receive payment?</a></p>
			<p id="faqs5" style="display: none; color: white; font-weight: normal;">You are required to adhere to the following guidelines while sending the books to the buyer:<br>
            Step 1: You would be informed through e-mail as soon as an order is received for your books.<br>
            Step 2: You are required to ship the books through a reputed courier service or Registered Post through the Indian Postal Service within 24 hours of the confirmation. Please note that the shipping charges are to be borne by the seller.<br>
            Step 3: The payment will be transferred to your bank account as soon as the buyer receives the books.<br>
            Note: We provide flexible payment options to our sellers which include bank account transfer and payment through cheque.</p>
			<br><br><p>If you cannot find your query <a href="contactus.php">click here</a> to contact us. Thank you!</p>
                       
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