<form action="/codetest/arrayinput.php" method='get'>
  <label for="Number1">Enter value 1:</label>
<input type="number" id="Number1" name="Number1" required><br><br>

  <label for="Number2">Enter value 2:</label>
<input type="number" id="Number2" name="Number2" required><br><br>


<input type="submit" value="Submit">
</form>
<?php
if (!empty($_GET["Number1"])&& !empty($_GET["Number2"])) {
	$Number1=$_GET["Number1"];
	$Number2=$_GET["Number2"];
	
function showvalues($Number1, $Number2)
{
	$Number=array($Number1, $Number2);
echo '<pre>';
print_r($Number);

}
$a=showvalues($Number1, $Number2);
print_r($a);



}
?>