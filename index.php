<?php
$dir = getcwd();
$dirList = scandir(getcwd(), 1);

for($x=0;$x < count($dirList); $x++)
{
	echo $x. '<a href="./'.$dirList[$x].'">'.$dirList[$x].'</a><br>';
}
?>
