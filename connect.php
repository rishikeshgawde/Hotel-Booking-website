<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title> Rao Hotel</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<body >  
<header class="header">
        <img class="logo" src="images/rao.png" alt="Majestic Hotel">
        <nav class="nav" >
       <div>
            <ul>
                <li class="list"><a href="index.html">Home</a></li>
                <li class="list"><a href="explore.html">Explore </a></li>
                <li class="list"><a href="rooms.html">Rooms</a></li>
                <li class="list"><a href="a.php">Booking</a></li>
                
               
               <li class="list"><a href="connect.php">Contact</a></li>
             <li ><a href="ab.html">About</a></li>
               
            </ul>        
            
            </div>
        </nav>
</header>
	<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
                    <img src="images/ECOMMERCE_Icons_Service-512.png" align="left" width=180px height=200px>
      		
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="POST">
                     
                           
					    	<div>
						    	<span><label>Enter Email Id</label></span>
						    	<span><input type="email" class="textbox" name="email" placeholder="Please enter your email" required="required"></span>
                                <span><label>Enter Feedback</label></span>
                                <textarea rows="10" cols="30" name="feed" placeholder="Please enter your valuable feeback." required="required"></textarea>
                                
						    </div>
				
<input type="submit" value="Submit" name="submit" onclick="myFunction()">                                
</fieldset>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>

    <footer class="footer">
        <div class="us">
        <p class="bold">About Us</p>
        <p>We are a part of chain of luxury hotels 
            which extends all over the world. We 
            provide a luxorious stay with various value
            added and free services which will make
            you visit us over and over again.</p>    
        </div>
       
        
        <div class="address">
        <p class="bold">Address</p>
        <p>Rao Hotel, Mumbai <br>
            Phone : 9876543210 <br>
            Email : info@raohotel.com</p>    
        </div>
        <br/>
    <div class="media">
        <a href="https://www.facebook.com" target="_blank"> <img src="images/fb.png"></a>
        <a href="https://www.google.com/" target="_blank"> <img src="images/G.png"> </a>
        <a href="https://twitter.com/login?lang=en" target="_blank"> <img src="images/twittr.png"> </a>
        <a href="https://www.instagram.com/?hl=en" target="_blank">  <img src="images/insta.png"> </a>
        
        </div>
        </footer>


<script type="text/javascript">
function myFunction() {
    {
        alert("Thank you for your response! Have a nice day.");
    }
}
</script>
<?php
if(isset($_POST["submit"]))

{
$server="localhost";
$username="root";
$pass="";
$datatbase="contact";
$connect=mysqli_connect($server,$username,$pass,$datatbase);


$email=$_POST["email"];
$feed=$_POST["feed"];

$query="insert into contact(email,feed) values('$email','$feed')";

$r=mysqli_query($connect,$query);

if($r)
{
  echo "inserted";

}
else
{
  echo "error";
}

}
?>

</body>
</html>

