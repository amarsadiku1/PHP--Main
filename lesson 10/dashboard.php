<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
         
include_once('config.php');
$sql = "SELECT * FROM users";
$getUser = $conn-prepare($sql);
$getUser->execute();
$users=$getUsers->fetchAll();
         
 ?>



<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>email</th>
        
    </thead>
</table>

<?php
 
 
 
 
 foreach($user as $user){
 
 ?>
<tr>
    <td><?$user['id']?></td>
    <td><?$user['name']?></td>
    <td><?$user['surname']?></td>
    <td><?$user['email']?></td>
    <td><?"<a herf='delet.php?id=$user[id]'>Delete</a> <a herf=' edit.php?id=$user[id]'> update </a>"?></td>

</tr>
<?php
 }
?>
</table>
<a herf ="add.php">Add user</a> 
</body>
</html>