<?php
$data = file_get_contents("cars.json");
$json = json_decode($data,true);

$output = "<ul>";
foreach($json['cars'] as $cars){
	$output .="<li><h4>BRAND:".$cars['brand']."</h4></li>";
	$output .="<li>Model:".$cars['model']."</li>";
	$output .="<li>year:".$cars['year']."</li>";
	$output .="<li>Body Style:".$cars['body style']."</li>";		
}
$output .="</ul>";

echo $output;
?>