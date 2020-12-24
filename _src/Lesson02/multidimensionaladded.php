<?php

	$user = array(
		"info" => array(
			"name" => "john",
			"age" => 25,
			"location" => "USA",
			"education_level" => "college"
		),
		"hobbies" => array(
			"fishing",
			"gaming",
			"painting"
		)
	);

	echo "My name is ". $user["info"]["name"] . ".<br>";
    echo "I am " . $user["info"]["age"] . " years old. <br>";
    echo "I live in " . $user["info"]['location'] . ".<br>";
	echo "My latest education level is " . $user['info']['education_level']. ".<br>";
	
	echo "I enjoy " . $user["hobbies"][0] . ", "  . $user["hobbies"][1] . ", " . $user["hobbies"][2].".<br>";

?>