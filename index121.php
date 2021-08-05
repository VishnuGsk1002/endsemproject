<?php

include "connection.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php
        include "head.php"
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Our Products </h1><hr>
            <a href="cart.php">Cart</a>
            <?php  
            $sql="select * from products";
            $res=$conn->query($sql);
            if($res->num_rows>0){
                    while ($row=$res->fetch_assoc()){
                        echo '
                        <div class="products">
                            <p>' .$row['pname'].'</p>
                            <h4> Rs '.$row['price'].' </h4> 
                            <p><a href="details.php?id='.$row['idn'].'" class="addtocart"><p>View details</p><hr></a></p>
                            </div> 
                        ';
                    
                    }

            }
            ?>
        </div>
    </div>
</body>
</html>