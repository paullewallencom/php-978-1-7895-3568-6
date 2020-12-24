<?php

$employees = array(
    array( 
        "name" => "John Doe",
        "title" => "Programmer",
        "salary" => 60000
    ),
    array( 
        "name" => "Tim Doe",
        "title" => "Programmer",
        "salary" => 72000
    ),
    array( 
        "name" => "Sarah Apple",
        "title" => "Designer",
        "salary" => 120000
    ),
    array( 
        "name" => "Amy Twin",
        "title" => "Manager",
        "salary" => 132000
    )
);

echo '<pre>';
print_r($employees[0]);
echo '</pre>';

echo '<pre>';
print_r($employees);
echo '</pre>';

?>