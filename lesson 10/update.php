<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

  $sql = "UPDATE user SET username=:username, name=:name, email=:email WHERE id=:id";
  $prep = $conn->prepare($sql);
  $prep->bindPram(':id',$id);
  $prep->bindPram(':name',$name);
  $prep->bindPram(':surname',$surname);
  $prep->bindPram(':email',$email);

  $prep->execute();
  
  header("Location:dashboard.php")
  
      
}

    

?>