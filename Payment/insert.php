<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$pageCode="a7eaf004bfef";
$userId="56c09c134111815c";
$sum=100;
$pagefield=array();
$pagefield['fullname']="saurav";
$pagefield['phone']="7677869987";
  $formhtml='<form method="post" id="bitform" action="https://sandbox.meshulam.co.il/api/light/server/1.0/createPaymentProcess/" >
  
  <input type="hidden" name="pageCode" value="'.$pageCode.'"/>
  <input type="hidden" name="userId" value="'.$userId.'"/>
  <input type="hidden" name="sum" value="'.$sum.'"/>
  <input type="hidden" name="successUrl" value="localhost/justc/Git/tamilpool/tamilpool/payment/success.php"/>
  <input type="hidden" name="cancelUrl" value="localhost/justc/Git/tamilpool/tamilpool/payment/failed.php"/>
  <input type="hidden" name="[fullName]" value="'.$pagefield['fullname'].'"/>
  <input type="hidden" name="pageField[phone]" value="'.$pagefield['phone'].'"/>
  <input type="submit">
 
  </form>';
  echo $formhtml;

  // echo '<script>document.getElementById("bitform").sumbit(); </script>';


  ?>
</body>
</html>