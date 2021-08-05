<?php
session_start();
include "connection.php"


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart Details</title>
    <link rel="stylesheet" href="style1.css">
    <?php 
    include "head.php"
?>

</head>
<body>
<div class="header">
        <h1 style="color: rgb(48, 6, 126); font-size: 3vw;">Boris Health Care </h1>
    
    <h2 style="color: rgb(48, 6, 126); ">View cart<hr></h2>
    <div class="navbar" style="position:relative;top:-11vh">
        <ul style="position:relative;left:40vw">
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php" >Cart</a></li>
    </ul>
    </div>
</div>


    <div class="container">
        <div class="row">
        <?php 

        if (isset($_POST["addtocart"])){
                if(isset($_SESSION["cart"])){
                        $idn_array=array_column($_SESSION["cart"],"idn");
                        if(!in_array($_GET["id"],$idn_array)){
                            $index=count($_SESSION["cart"]);
                            $item=array(
                                'idn'=>$_GET['id'],
                                'pname'=>$_POST['pname'],
                                'price'=>$_POST['price'],
                                'qty'=>$_POST['qty']);
                            $_SESSION["cart"][$index]=$item;
                            // print_r($idn_array)    ;      
                            header("location:cart.php");
                            echo "<script>alert('Product Added..');</script>";
                            

                        }
                    else{
                            echo "<script>alert(' Product already added ... ');</script>";
                        }
 
                }
            
                else{
                $item=array(
                    'idn'=>$_GET["id"],
                    'pname'=>$_POST["pname"],
                    'price'=>$_POST["price"],
                    'qty'=>$_POST["qty"]
                );
                PRINT "<script>alert('Product Added sucessfully');</script>";
                header("location:cart.php");
                $_SESSION["cart"][0]=$item;
                }
                
                
        }

        $sql="select * from products where idn={$_GET["id"]}";
        $res=$conn->query($sql);
        if($res->num_rows>0){
            echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
            if($row=$res->fetch_assoc()){

            echo "
           
            <table class='table table-borderd'> 
            <tr><td><strong>{$row["pname"]}</strong></td></tr>
            <tr><td><strong>Enter Qty:</strong></td><td>
                <input type='number' name='qty' required>
                <input type='hidden' name='pname' value='{$row["pname"]}'>
                <input type='hidden' name='price' value='{$row["price"]}'>
                <input type='submit' name='addtocart' class='btn btn-success' value='Add to Cart'   >
            </td></tr>
            
            <tr><td><strong><p>Price : Rs {$row["price"]}</p> </strong></td></tr>
           
            
            
            </form>"  ;
             

        }}
        else{
            header("location:index.php");
        }
    
    
    ?>

        </div>
    </div>

  
    
</body>
</html>