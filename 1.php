<?php
$x=10;
function testGlobalValue(){
GLOBAL $x;
$x++;
echo"Value of \$x is $x<br>";
}
testGlobalValue();
echo"outside value of \$x is $x";

?>

<?php
$x=23;
$y=45;
$sum=$x+$y;
echo"$sum";
?><br>
<?php
$x=5;
$x++;
echo"$x";
?><br>
<?php
echo(pow(4,2));
?>