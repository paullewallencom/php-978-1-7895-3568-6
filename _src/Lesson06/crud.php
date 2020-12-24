<?php
$dbh = new PDO('mysql:host=localhost;dbname=packt_database', 'root', 'root');
$name = $_POST['name'];
$deleteid = $_GET['deleteid'];
$idtoupdate = $_POST['idtoupdate'];
$editid = $_GET['editid'];


if ($_POST['submit'] == 'Submit'){
    //insert data!!!!
    if (!$idtoupdate){
  $inssql = $dbh->prepare("insert into contacts (name) values ('$name')");
  $inssql->execute(); 
    }
  print_r($inssql->errorInfo()); 
  
}

//delete
if (isset($deleteid)){
    $delsql= $dbh->prepare("delete from contacts where id = '$deleteid'");
    $delsql->execute();
}

if (isset($idtoupdate)){
$upsql = $dbh->prepare("update contacts set name = '$name' where id = '$idtoupdate'");
$upsql->execute();    
}

//need to display our results so that we see what's working and what's in our database!!!
$selsql = $dbh->prepare("select id,name from contacts");
$selsql->execute(); 
while ($row = $selsql->fetch()){
    echo $row['name'].'  <a href="crud.php?deleteid='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete '.$row['name'].'\')" >Delete</a> <a href ="crud.php?editid='.$row['id'].'">Edit</a><br>';
}

if (isset($editid)){
    $getupsql = $dbh->prepare("select name from contacts where id = '$editid'");
    $getupsql->execute();
    $row = $getupsql->fetch();
    $upname = $row['name'];
}

?>

<form action ="crud.php" method="post">
<input type="text" name="name"  required placeholder="Full Name Here" value="<?php echo $upname;?>"/>
<input type="hidden" name="idtoupdate" value="<?php echo $editid;?>"/>    
<input type="submit" name="submit" value="Submit"/>    
</form>




