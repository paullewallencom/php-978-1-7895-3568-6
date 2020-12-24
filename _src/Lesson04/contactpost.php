<?php 

    if($_POST){ 
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        echo "Name: " . $_POST['name'] . "\n"; 

        echo "Email: " . $_POST['email'] . "\n"; 

        echo "Message: " . $_POST['message'] . "\n"; 

        exit(); 

    } 

?>   

<html> 

<body> 

    <form action="contactpost.php" method="post"> 

        Name:<input type="text" name="name" /><br>

        Email:<input type="email" name="email" /><br>

       Message:<br> <textarea name="message"></textarea><br>

        <button type="submit">Send</button> 

    </form> 

</body> 

</html>