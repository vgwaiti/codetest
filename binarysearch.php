<form action="/codetest/binarysearch.php" method='get'>
  <label for="Number1">Enter value 1:</label>
<input type="number" id="Number1" name="Number1" required><br><br>

  <label for="Number2">Enter value 2:</label>
<input type="number" id="Number2" name="Number2" required><br><br>

  <label for="Number3">Enter value to search for:</label>
<input type="number" id="Number3" name="Number3" required><br><br>
<input type="submit" value="Submit">
</form>

<?php
function binarySearch($array, $value) {
    // Set the left pointer to 0.
    $left = 0;
    // Set the right pointer to the length of the array -1.
    $right = count($array) - 1;
 
    while ($left <= $right) {
      // Set the initial midpoint to the rounded down value of half the length of the array.
      $midpoint = (int) floor(($left + $right) / 2);
 
      if ($array[$midpoint] < $value) {
        // The midpoint value is less than the value.
        $left = $midpoint + 1;
      } elseif ($array[$midpoint] > $value) {
        // The midpoint value is greater than the value.
        $right = $midpoint - 1;
      } else {
        // This is the key we are looking for.
        return $midpoint;
      }
    }
    // The value was not found.
    return -1;
}  
if (!empty($_GET["Number1"])&& !empty($_GET["Number2"])&& !empty($_GET["Number3"])) {
	$Number1=$_GET["Number1"];
	$Number2=$_GET["Number2"];
	$Number3=$_GET["Number3"];
	//put the values entered in an array
$Number=array($Number1, $Number2);
echo'<pre>';
print_r($Number);
$b=binarySearch($Number,$Number3);
print_r($b);
}
?>