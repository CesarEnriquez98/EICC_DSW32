<?php
$variable;
$variable=23;
echo ($variable+3)."<br>";
echo ($variable++)."<br>";
echo ($variable--)."<br>";
echo ($variable+=5)."<br>";
echo ($variable-=6)."<br>";

for($x=0;$x<$variable;$x++){
echo $x;
echo "<br>";
}
echo"<ul>";
while($variable<27){
echo"<li>";	
echo $variable;
$variable++;
	}
	echo"</li>";
?>