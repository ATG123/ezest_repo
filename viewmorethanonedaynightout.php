<?php session_start(); ?>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: #D5DBDB;
}
li.dropdown {
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F4ECF7;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content a:hover {background-color: #CB4335;
color:white;}
.dropdown:hover .dropdown-content 
{
    display: block;
}

body
{
font-size:18px;
font-family:Garamond;
background-image: url('hostel6.jpg');
background-size: cover;
}

div {
    border-radius: 5px;
    background-color: #D5DBDB;
    opacity:0.85;
   color:black;
    padding: 20px;  
    width: 250px;
    border: 20px red;
    <!--margin-left: 100px;-->
    <!--margin-top: 75px;-->

    border: 2px solid #FCF3CF;

}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
    font-family:Garamond;
}
</style>
</head>
<body>
<a href="transfercontrolaccroles.html" style="float:right;color:white"><h3>LOG OUT</h3></a>
<br>

<ul>
<li class="dropdown">
    <b><a href="#stud" class="dropbtn">STUDENT DETAILS</a>
    <div class="dropdown-content"></b>
      <b><a href="viewbasicstudinfo.php">VIEW BASIC STUDENT INFO</a></b>
      <b><a href="completestudinfo.php">VIEW COMPLETE STUDENT INFO</a></b>
      <b><a href="viewonedaynightout.php">STUDENT ON NIGHTOUT FOR ONE DAY</a></b>
      <b><a href="viewmorethanonedaynightout.php">STUDENT ON NIGHTOUT FOR MORE THAN ONE DAY</a></b>
    </div>
  </li>


   <li class="dropdown">
    <b><a href="#stud" class="dropbtn">STAFF DETAILS</a></b>
    <div class="dropdown-content">
      <b><a href="fourthpg.html">FILL BASIC STAFF INFORMATION</a></b>
      <b><a href="viewbasicstaffinfo.php">VIEW BASIC STAFF INFORMATION</a></b>
      <b><a href="acttrytosearch.php">EDIT STAFF INFO</a></b>
      <b><a href="#">STAFF LEAVE RECORD</a></b>
    </div>
  </li>

 <li class="dropdown">
    <b><a href="#staff" class="dropbtn">NOTFICATIONS</a></b>
    <div class="dropdown-content">
      <b><a href="dispprefbasic_enquiry.php">NEW ENQURIES</a></b>
      <b><a href="shownewcomplaints.php">COMPLAINTS</a></b>
      <b><a href="viewfeedback.php">FEEDBACK STATUS</a></b>
    </div>
  </li>

 <li class="dropdown">
    <b><a href="#staff" class="dropbtn">FACILITIES</a></b>
    <div class="dropdown-content">
      <b><a href="wifistatus.php">WI-FI</a></b>
      <b><a href="laundrystatus.php">LAUNDRY</a></b>
      <b><a href="messstatus.php">MESS</a></b>
    </div>
  </li>

<li class="dropdown">
    <b><a href="#staff" class="dropbtn">STATUS OF ROOMS</a></b>
    <div class="dropdown-content">
      <b><a href="showacstatustoadmin.html">AC ROOMS</a></b>
      <b><a href="shownonacstatustoadmin.html">NON AC ROOMS</a></b>
    </div>
  </li>

<li class="dropdown">
    <b><a href="#staff" class="dropbtn">OTHER INFO</a></b>
    <div class="dropdown-content">
      <b><a href="netprofit.php">NET PROFIT</a></b>
      <b><a href="hitratio.php">HIT RATIO</a></b>
    </div>
  </li>
</ul>
<div class="container" style="width:80%;margin-left: 160px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">

<h3>RECORD OF STUDENTS ON NIGHT OUT FOR MORE THAN ONE DAY</h3>
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center"><tr>
<th>ROOM NUMBER</th>
<th>BED NUMBER</th>
<th>NUMBER OF DAYS</th>
<th>FROM DATE</th>
<th>TILL DATE</th>
</tr>
<?php
include 'justdefine.php';
include 'connect.php';

$pquery = "select * from morethanonedaynightout";
$countrows=mysql_query($pquery) or die("Error , Search Query Failed");
while ($res = mysql_fetch_array($countrows)) 
{     
?>
<tr>
<th><?php echo $res['roomno'];?></th>
<th><?php echo $res['bedno'];?></th>
<th><?php echo $res['numdays'];?></th>
<th><?php echo $res['from'];?></th>
<th><?php echo $res['tillwhen'];?></th>
</tr>
<?php
}
mysql_close($connection);
?>
</table>

</table>
</div>
</body>
</html>

