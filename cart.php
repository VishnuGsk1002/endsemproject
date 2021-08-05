


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Order</title>
    <?php 
    include "head.php"
?>
</head>
<body>
<div class="header">
<h1 style="color: rgb(48, 6, 126); font-size: 3vw;">Boris Health Care </h1>
<h3 style="color: rgb(48, 6, 126);">Order Summary</h3><hr>
</div>


    <div class="navbar" style="position:relative;top:-11vh">
        <ul style="position:relative;left:50vw"><li><a href="index.php">Home</a></li></ul>
    </div>

    <div class="container">


            <?php
        session_start();
        ?>
        <table class='table table-bordeded'>

        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Remove</th>
        </tr>
        <?php
            if(isset($_GET["del"])){
                foreach($_SESSION["cart"] as $keys=>$values){
                    if($values["idn"]==$_GET["del"]){
                        unset($_SESSION["cart"][$keys]);
                    }
                }
            }



            if(!empty($_SESSION["cart"]))
            { $total=0;
                foreach($_SESSION["cart"] as $keys=>$values)
                {
                    
                $amt=$values["qty"]*$values["price"];
                $total+=$amt;
                  echo " <tr>
                        <td>{$values["pname"]}</td>
                        <td>{$values["qty"]}</td>
                        <td>{$values["price"]}</td>
                        <td>{$amt}</td>
                        <td><a href='cart.php?del={$values["idn"]}'>Remove</a></td>
                        
                    </tr>";
                }
                  echo " <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>{$total}</td></tr>";
                  
                
            }
           
        
        
        ?>
</table>
<a href="checkout.php" class="btn btn-success" style="position:relative;left:45vw;">Purchase</a>
    </div>
    
    </p>
</body>
</html>