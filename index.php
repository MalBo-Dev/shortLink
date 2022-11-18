<?php
header('Content-Type: application/json;charset=utf-8');
$a=$_GET['name'];
$url = $_GET['url'];
$txt= file_get_contents("url.txt");

$adres="https://MWEB.ml"; // set url domain


if ($a == false || $url == false){
	echo "You did not enter the address !!!";
    exit();
}else{
	
	if(strstr($txt,$a) || strpos($url,"'") !== false or strpos($url,"<") !== false or strpos($url,'"') !== false or strpos($url,"}") !== false or strpos($url,"{") !== false or strpos($url,")") !== false or strpos($url,"(") !== false or strpos($url,",") !== false or strpos($url,'[') !== false or strpos($url,']') !== false or strpos($url,'$') !== false or strpos($url,'&') !== false or strpos($url,'*') !== false or strpos($url,'>') !== false || strpos($a,"'") !== false or strpos($a,"<") !== false or strpos($a,'"') !== false or strpos($a,"}") !== false or strpos($a,"{") !== false or strpos($a,")") !== false or strpos($a,"(") !== false or strpos($a,",") !== false or strpos($a,'[') !== false or strpos($a,']') !== false or strpos($a,'$') !== false or strpos($a,'&') !== false or strpos($a,'*') !== false or strpos($a,'>') !== false){
		
		echo "$a mujod in server !!!";
		exit();
	}else{
		
		if(!preg_match("/\b(?:(?:http|https|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){
			
			echo "site your not is http or https";
		}else{
if(!strstr(file_get_contents("url.txt"),"$url")){
          $file=fopen("url.txt","a");
          fwrite($file,"$a\n");
          fclose($file);
    mkdir("$a");
    $source = file_get_contents("link.php");
    $putout = str_replace("[*LINK*]", "$url", $source);
    file_put_contents("$a/index.php", "$putout");
  $short="$adres/$a/";
 // echo $short;
//////////////////print//////////////////////
echo json_encode(array_merge(['ok'=> true, 'results'=>['Creator'=>"@MONSTER_hp",'Team'=>"@Malbo_Dev",'link'=>"$url",'name'=>"$a",'your_link'=>"$short",


]]), 448);
	}
	
}}}
