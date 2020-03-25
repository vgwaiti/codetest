<?php

function memoize($func)
{
    return function () use ($func) {
        static $cache = [];

        $args = func_get_args();
        $key = serialize($args);
        $cached = true;

        if (!isset($cache[$key])) {
            $cache[$key] = $func(...$args);
            $cached = false;
        }

        return ['result' => $cache[$key], 'cached' => $cached];
    };
}
if (!empty($_GET["Number"])) {
	$Number=$_GET["Number"];
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
 

$a = IsPrime($Number);

if ($a==0)
echo 'False'."\n";
else
echo 'True'."\n";
}
$memoizedAdd = memoize(
    function($a) {
        return $a;
    }
);

var_dump($memoizedAdd);  
  
?>
<form action="/codetest/memoize.php" method='get'>
  <label for="Number">Enter the number:</label>
  <input type="number" id="Number" name="Number" required><br><br>
  <input type="submit" value="Submit">
</form>
