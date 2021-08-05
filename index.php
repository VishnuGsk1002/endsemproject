<?php

include "connection.php";
include "head.php"

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <!-- <script src="main.js"></script> -->
    <!-- <script type="text/javascript"> -->
        
             
    <title>BorisHealtcare</title>
</head>
<body style="background color:whutesmoke;">
    <div class="header">
        <h1 style="color: rgb(48, 6, 126); font-size: 3vw;">Boris Health Care </h1><br>
        <h2 style="color: rgb(48, 6, 126); left:2vh ";>Our Products</h2><BR><br>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="aboutus.html">About us</a></li>
            <li><a href="ourbuisness.html">Our Buisness</a></li>
            <li><a href="ourvision.html">Our Vision</a></li>
            <li><a href="keyperson.html">Key Personnel</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a  href="cart.php" >Cart</a></li>
        </ul>
</div>

        <section>
            <div class="container">
              
                <div class="row">
                <?php  
                $sql="select * from products";
                $res=$conn->query($sql);
                if($res->num_rows>0){
                        while ($row=$res->fetch_assoc()){
                            
                echo '  
                                <div class="col-sm-4 col-lg-3 col-md-3 text-center">
                                    <div class="image">
                                    <img src="image/'.$row['image'].' ">
                                    </div>
                                    <h4>' .$row['pname'].'</h4>
                                    <h5> Rs '.$row['price'].' </h5> 
                                    <p><a href="details.php?id='.$row['idn'].'" ><p>View details</p><hr></a></p>
                             
                                </div>
                    
                            ';
                        
                        }
    
                }
                ?>
                    
                </div>
            </div>   
                    
                </section>
                <div class="footer">
                    <div class="fcontent" style="position:relative;left:3vw;background-color:whitesmoke;">
                       <hr> <h3> For more Info</h3>
                    <p style="font-size:2vh">For more queries Mail us @ borishelathcare@gmail.com
                   <br>
                   © borishealthcare.com 
                   All Rights Reserved
            </p>
                    
                    </div>
                    </div>

        
               



</body>
<script src="main.js"></script>
</html>