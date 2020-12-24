<?php
	
	$students = array(
		"Jill" => array(
  		 "age" => 20,
  		 "favorite_color" => "blue"
		),
		"John" => array(
		"age" => 23,
   		"favorite_color" => "red"
		),
		"Amy" => array(
  	    "age" => 25,
        "favorite_color" => "green"
        )
	);
	

	foreach($students as $name => $info){
	  echo $name . " is " . $info['age'] . " years old\n";
  }
?>