<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Rao Hotel</title>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

    </head>
    
<body>
    <header class="header">
        <img class="logo" src="images/rao.png" alt="Majestic Hotel">
        <nav class="nav">
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
    
    
    <section class="main">
           <p>Booking</p>
    </section>
<pre>
<FORM align="center" method="POST">
<b>
FIRST NAME    :<INPUT TYPE="TEXT" VALUE="" SIZE="30"  onfocus="abc(this)" ID="FN" onblur="fn()" NAME="FNAME" required="required" >
<BR>
LAST NAME     :<INPUT TYPE="TEXT" VALUE="" SIZE="30" onfocus="abc(this)" ID="LN" onblur="fn2()" NAME="LNAME" required="required" >
<BR>
ADDRESS       :<INPUT TYPE="TEXT" VALUE="" SIZE="30" onfocus="abc(this)" NAME="ADDRESS" required="required" >
<BR>
ADHAAR        :<INPUT TYPE="TEXT" VALUE="" SIZE="30" onfocus="abc(this)" NAME="ADHAAR" required="required" min="0" max="12">
<BR>
PHONE         :<INPUT TYPE="TEXT" VALUE="" SIZE="30" onfocus="abc(this)" NAME="PHONE" required="required" min="0" max="10" >
<BR>
---------------------------------------------------------------------------------------------------
<br>
SELECT BED TYPE:
<select name="BED">
<option value="SINGLE">SINGLE</OPTION>
<option value="DOUBLE">DOUBLE</OPTION>
</select>

<BR>SELECT ACCOMMODATION:
<SELECT name="ACCOMMODATION">
<option value="PREMIUM">PREMIUM</OPTION>
<option value="GENERAL">GENERAL</OPTION>
</SELECT >

<BR>ADDITIONAL ACCOMMODATION:
<SELECT name="A_ACCOMMODATION">
<option value="POOL">POOL</OPTION>
<option value="GAME LOT">GAME LOT</OPTION>
</SELECT>
<BR>
---------------------------------------------------------------------------------------------------

<b>
<div>Check-in:<input type="date" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required" name="START" >
<BR>
    <div>Check-out:<input type="date" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" name="END" ></div>

---------------------------------------------------------------------------------------------------

SELECT PAYMENT OPTION:
<SELECT name="PAYMENT">
<option value="CREDIT CARD">CREDIT CARD</OPTION>
<option value="DEBIT CARD">DEBIT CARD</OPTION>
<option value="NEFT">NEFT</OPTION>
<option value="NET BANKING">NET BANKING</OPTION>
</SELECT>
<BR>
SELECT PAYMENT GATEWAY:
<SELECT name="P_GATEWAY">
<option value="payTM">payTM</OPTION>
<option value="PAY-PAL">PAY-PAL</OPTION>
</SELECT>
</b>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="button" name="submit" onclick="proceed()" >Submit</button>
  </div>
</div>
</pre>
</p>
</FORM>


    
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
    
<?php
if(isset($_POST["submit"]))
{
$server="localhost";
$username="root";
$pass="";
$datatbase="book";
$connect=mysqli_connect($server,$username,$pass,$datatbase);


$FNAME=$_POST["FNAME"];
$LNAME=$_POST["LNAME"];
$ADDRESS=$_POST["ADDRESS"];
$ADHAAR=$_POST["ADHAAR"];
$PHONE=$_POST["PHONE"];
$BED=$_POST["BED"];
$ACCOMMODATION=$_POST["ACCOMMODATION"];
$A_ACCOMMODATION=$_POST["A_ACCOMMODATION"];
$START=$_POST["START"];
$END=$_POST["END"];
$PAYMENT=$_POST["PAYMENT"];
$P_GATEWAY=$_POST["P_GATEWAY"];

$query="insert into book(FNAME,LNAME,ADDRESS,ADHAAR,PHONE,BED,ACCOMMODATION,A_ACCOMMODATION,START,END,PAYMENT,P_GATEWAY) values('$FNAME','$LNAME','$ADDRESS','$ADHAAR','$PHONE','$BED','$ACCOMMODATION','$A_ACCOMMODATION','$START','$END',
'$PAYMENT','$P_GATEWAY')";

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