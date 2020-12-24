<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "First Name: " . $_POST['firstname'] . "<br>";
        echo "Last Name: " . $_POST['lastname'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
    }
?>
<html>
    <body>
        <form action="index.php" method="post">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname"/>
            <br>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname"/>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"/>
            <br>
            <button type="submit">Save</button>
        </form>
    </body>
</html>