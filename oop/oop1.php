<?php

$cricketer = new stdClass;
//stdClass is the empty class in the php

$cricketer->coach="Ravi Shastri";

$cricketer->player =array('rohit', 'dhawan', 'kohli', 'rehane', 'raina', 'dhoni', 'binny');
foreach ($cricketer->player as $key) {
	echo $key;
	echo "</br>";
}
echo $cricketer->coach;






?>