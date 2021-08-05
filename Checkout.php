<?php
include "head.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style1.css">
    <style>input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}</style>
</head>
<body>
<div class="header">
<h1 style="color: rgb(48, 6, 126); font-size: 3vw;">Boris Health Care </h1>
<h3 style="color: rgb(48, 6, 126);">Checkout</h3><hr>
</div>


    <div class="navbar" style="position:relative;top:-11vh">
        <ul style="position:relative;left:50vw"><li><a href="index.php">Home</a></li></ul>
    </div>

    <div class="container">


            <?php
        session_start();
        ?>
<div><form action="bye.php"  name="details" onsubmit="return validate()">
    <h3 style="color: rgb(48, 6, 126);">Personal Information</h3><hr><br>
    First Name : <input type="textbox" placeholder="Enter Your First Name" name="fname" required>     <br><br>           
    Last Name : <input type="textbox" placeholder="Enter Your Last Name" name="lname">   <br><br>    
    Email Adress : <input type="email" placeholder="Email Address" name="email" required>   <br><br>    
    Contact Number: <input type="number" placeholder="Mobile Number" name="mobile">   <br><br>    <br><br>
    <h3 style="color: rgb(48, 6, 126);">Residence address</h3><hr><br>
    House Name : <input type="textbox" placeholder="House Name" name="housename">     <br><br>           
    Street Name: <input type="textbox" placeholder="Street Name" name="streetname">   <br><br>    
    District  : <input type="text" placeholder="District"  name="district">   <br><br>    
    State  : <input type="text" placeholder="State"  name="state">   <br><br>    
    Country : <input type="text" placeholder="Country"  name="country" >   <br><br>    
    Pincode: <input type="number" placeholder="Pincode"  name="pincode">   <br><br>   <br><br>
    <h3 style="color: rgb(48, 6, 126);">Payment Methods</h3><hr><br>
    Pay on Delivery  <input style="position:relative;left:3vw;top:0.5vh"type="radio" name="option" vlaue="selected">  <br><br>  <br><br>
     
    <input type="submit" class="btn btn-success">


</form></div>
</body>
<script>
    function validate(){
        let x=document.forms["details"]["fname"].value;
        if(x==""){
            alert("Name must be filled out");
            return false;
        }
        let y=document.forms["details"]["lname"].value;
        if(y==""){
            alert(" Last Name must be filled out");
            return false;
        }
        let z=document.forms["details"]["mobile"].value;
        if(y==""){
            alert(" Mobile must be filled out");
            return false;
        }
        let a=document.forms["details"]["housename"].value;
        if(a==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
        let b=document.forms["details"]["streetname"].value;
        if(b==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
        let c=document.forms["details"]["district"].value;
        if(c==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
        let d=document.forms["details"]["state"].value;
        if(d==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
        let e=document.forms["details"]["country"].value;
        if(e==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
        let f=document.forms["details"]["pincode"].value;
        if(f==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
        let g=document.forms["details"]["option"].value;
        if(g==""){
            alert(" All field on Residence Address  be filled out");
            return false;
        }
    }
    </script>
</html>