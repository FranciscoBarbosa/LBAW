<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>BidIt</title>
<!-- for-mobile-apps -->
</head>
<body>
<?php
require_once 'include/config.php';

function test(){
global $conn;
$stmt = $conn->prepare("SELECT email FROM account");

$stmt->execute(array());
$result=$stmt->fetch();
 return $result;
}

?> 

<p><?php 
$var=test();
echo $var; 
?></p>

</body>
</html>
