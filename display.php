<?php 

@require('db.php');
 
 $sql = "SELECT * FROM users";
 $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>pass</th>
                <th colspan="2">buttons</th>
            </tr>
        </thead>
        <tbody>
            <?php 
         $key = 1;
     while($res = mysqli_fetch_array($result)){
         ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['password']; ?></td>
                <td><a href="update.php?id=<?php echo $res['id']; ?>">update</a></td>
                <td><a href="delete.php?id=<?php echo $res['id']; ?>">delete</a></td>
            </tr>
            <?php
            $key++;
                }
             ?>
        </tbody>
    </table>
    
</body>
</html>