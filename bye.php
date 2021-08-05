
<?php
session_start();
include "head.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="header">
<h1 style="color: rgb(48, 6, 126); font-size: 3vw;">Boris Health Care </h1>
<h3 style="color: rgb(48, 6, 126);">Order Summary</h3><hr>
</div>


    <div class="navbar" style="position:relative;top:-11vh">
        <ul style="position:relative;left:50vw"><li><a href="index.php">Home</a></li></ul>
    </div>
        <h3 style="color: rgb(48, 6, 126);"><center>Your Order have been placed succesfully . Your order will be delivered Within 4-5 days<center>  </h3>
<?php
        session_destroy();
?>
        
</body>
</html>