<?php 

    if($_GET){ 
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';
        echo "Name: " . $_GET['name'] . "\n"; 

        echo "Email: " . $_GET['email'] . "\n"; 

        echo "Message: " . $_GET['message'] . "\n"; 


        exit(); 

    } 

?>   

<html> 

<body> 

    <form action="contactget.php" method="get"> 

        Name:<input type="text" name="name" /><br>

        Email:<input type="email" name="email" /><br>

       Message:<br> <textarea name="message"></textarea><br>

        <button type="submit">Send</button> 

    </form> 

</body> 

</html>