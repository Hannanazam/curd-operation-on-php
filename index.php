<?php

@require('db.php');

if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];

    $sql = 'Insert into users (`name`, `password`) values ("'. $name .'", "'. $password .'")';

    if ($conn->query($sql) === TRUE) {
        // echo '<p style="color:green;">New record created successfully</p>';
        header('location:index.html');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
} else {
    echo '<p style="color: red;">Please Enter Name And Password</p>';
}

$conn->close();

?>
