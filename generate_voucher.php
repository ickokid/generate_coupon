<?php
include "class.coupon.php";

$total = 1000;

$arr = array('length'=>9, 'letters'=>true, 'numbers'=>true);
for($i=0; $i<$total; $i++){
	$voucher = coupon::generate($arr);
	echo $voucher."<br>";
}

?>