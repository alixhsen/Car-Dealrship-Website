<?php
    $conn = mysqli_connect('localhost', 'root', '', 'carshop');
    if (!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if (!mysqli_select_db($conn, 'carshop')) {
        die("No DataBase");
    }

    $username = $_POST['newadminuser'];
    $password = $_POST['newadminpass'];

    $query = "INSERT INTO accounts (Username, `Password`) VALUES ('$username', '$password')";

    $check = mysqli_query($conn, $query);
    if ($check) {
        echo '<script>alert("Added Admin");</script>';
        echo '<script>window.location.replace("dashboard.html");</script>';
    } else {
    echo("Cannot Add Admin: " . mysqli_error($conn));
    }

?>