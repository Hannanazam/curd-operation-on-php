<?php
@require('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE id = $id ";
    $user = mysqli_fetch_assoc($conn->query($sql));
}

if (isset($_POST['submit']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['password']) ) {
    $sql = "UPDATE `users` SET name = '". $_POST['name'] ."' , password = '". $_POST['password'] ."' WHERE id = ". $_POST['id'] ." ";
    if ($conn->query($sql) == true) {
        header('location:display.php');
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form method="POST" action="./update.php">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <input type="text" required placeholder="name" name="name" value="<?php echo $user['name']; ?>">
        <input type="password" required placeholder="password" name="password" value="<?php echo $user['password'] ?>">
        <input type="submit" name="submit" required value="Update">
    </form>
</body>
</html>