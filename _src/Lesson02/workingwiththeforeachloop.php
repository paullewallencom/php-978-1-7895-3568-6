<?php
	
$students = array(
	"Jill" => array(
   "age" => 20,
   "gender" => "female",
   "favorite_color" => "blue"
   ),
   "John" => array(
   "age" => 23,
   "favorite_color" => "red"
   ),
   "Amy" => array(
   "age" => 25,
   "gender" => "female",
   "favorite_color" => "green",
   ),
   "Bob" => array(
   "age" => 20,
   "gender" => "male",
   "favorite_color" => "black"
   ),
   "Jim" => array(
   "age" => 18,
   "gender" => "male",
   "favorite_color" => "purple"
   ),
   "Karen" => array(
   "age" => 27,
   "gender" => "female",
   "favorite_color" => "brown"
   )
);


echo '<pre>';
print_r($students);
echo '</pre>';
   
   foreach ($students as $key=>$student){
      echo '<h1>'.$key.'</h1>';
      foreach ($student as $innerkey=>$innervalue){
         echo $innerkey.': '.$innervalue.'<br>';
       }
       echo '<br>';
      }
?>
