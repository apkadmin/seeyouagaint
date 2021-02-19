<?php
$today = date("Y-m-d");
if(strtotime($today) > strtotime("2021/06/10")){
	echo "https://www.facebook.com/100015172690032";
} else {
	echo "wait for time";
}
?>