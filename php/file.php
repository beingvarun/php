<?php
$file = file('oop/oop1.php');
$file = file_get_contents('oop/oop1.php');
$line = count($file);
echo $line;
echo "</br>";
$alt ='';

//loop through the lines in the files
for ($i=0; $i<$line; $i++){
	if ($alt == '#40d47e'){
		$alt ='#3498db';
	}
	else{
		$alt = '#40d47e';
	}
	//display the line inside the div tag

echo '<div style="background-color:'.$alt.';">';
echo $i.':'.htmlspecialchars($file[$i]);
echo "</div>\n";
}


?>