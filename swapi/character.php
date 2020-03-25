<?php
if (!empty($_GET["id"])) {
	$Name=$_GET["id"];
  $content = file_get_contents('https://swapi.co/api/people/');

//echo $content;

$arr = json_decode($content, true);
$results=$arr['results'];
// Define a result array
$result = [];
/*echo"<pre>";
print_r($arr['results']);*/
// Table start
echo "<table>";
echo "<tr>";
     echo "<th>name</th>";
     echo "<th>height</th>";
     echo "<th>mass</th>";
     echo "<th>hair_color</th>";
	 echo "<th>skin_color</th>";
	 echo "<th>eye_color</th>";
	 echo "<th>birth_year</th>";
	 echo "<th>gender</th>";
	 echo "<th>homeworld</th>"; 
	 echo "<th>films</th>"; 
	 echo "<th>species</th>";
	 echo "<th>vehicles</th>"; 
	 echo "<th>starships</th>"; 
	 echo "<th>created</th>"; 
	 echo "<th>edited</th>"; 
	 echo "<th>url</th>"; 
  echo "</tr>";
foreach($results as $k=>$val){ 
if($val['name']==$Name) {
    $name = $val['name'];
	$height = $val['height'];
	$mass = $val['mass'];
	$hair_color=$val['hair_color'];
	$skin_color=$val['skin_color'];
	$eye_color=$val['eye_color'];
	$birth_year=$val['hair_color'];
	$gender=$val['gender'];
	$homeworld=$val['homeworld'];
	$films = implode(" ",$val['films'])."<br>"; // get all films
    $species = implode(" ",$val['species'])."<br>"; // get species array
    $vehicles = implode(" ",$val['vehicles'])."<br>"; // get vehicles array
	$starships = implode(" ",$val['starships'])."<br>"; // get starships array
    $created=$val['created'];
    $edited=$val['edited'];
    $url=$val['url'];

 
       echo "<tr>";
	   
         echo "<td>{$name}</td>";
         echo "<td>{$height}</td>";
         echo "<td>{$mass}</td>";
         echo "<td>{$hair_color}</td>";
		 echo "<td>{$skin_color}</td>";
		 echo "<td>{$eye_color}</td>";
		 echo "<td>{$birth_year}</td>";
		 echo "<td>{$gender}</td>";
		 echo "<td>{$homeworld}</td>";
		 echo "<td>{$films}</td>";
		 echo "<td>{$species}</td>";
		 echo "<td>{$vehicles}</td>";
		 echo "<td>{$starships}</td>";
		 echo "<td>{$created}</td>";
		 echo "<td>{$edited}</td>";
		 echo "<td>{$url}</td>";
       echo "</tr>";
    //}
//}
}else{
	echo "";
}
}


}
echo "</table>";
// Table end
      ?>