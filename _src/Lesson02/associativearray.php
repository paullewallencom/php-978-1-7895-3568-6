<?php

	$user = array("name" => "john",
				  "age" => 25,
				  "location" => "USA",
				  "education_level" => "college"
		     );

	echo "My name is ". $user["name"] . ".<br>";
    echo "I am " . $user["age"] . " years old. <br>";
    echo "I live in " . $user['location'] . ".<br>";
	echo "My latest education level is " .$user['education_level']. ".<br>";


?>