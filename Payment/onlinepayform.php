<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online|Pay</title>
    
</head>
<body>
<?php

$pageCode="a7eaf004bfef";
$userId="56c09c134111815c";
$sum=100;
?>
    <h2> Online Payment</h2>
    <form  method="post" action="https://sandbox.meshulam.co.il/api/light/server/1.0/createPaymentProcess" >
   
        <input type="hidden" name="pageCode" value="'.$pageCode.'"/>
        <input type="hidden" name="userId" value="'.$userId.'"/>
        <input type="hidden" name="sum" value="'.$sum.'"/>
        <input type="text" name="fullName" placeholder=" Fullname" /> <br> <br>
        <input type="text" name="phone" placeholder=" phone" /> <br> <br> 
        <input type="submit" name="submit" placeholder="PayNow"/><br> <br>
    
    </form>

</body>
</html>