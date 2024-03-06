<?php
    $conn = mysqli_connect('localhost', 'root', '', 'carshop');
    if (!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if (!mysqli_select_db($conn, 'carshop')) {
        die("No DataBase");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM accounts';
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result) > 0;
    if($check){
        while($row = mysqli_fetch_assoc($result)){
            if($username == $row['Username'] && $password == $row['Password']){
                header("Location: dashboard.html");
                exit();
                break;
            }
            else if($username != $row['Username']){
                echo '<script>alert("Invalid Username");</script>';
                echo '<script>window.location.replace("login.html");</script>';
            }
            else{
                echo '<script>alert("Invalid Password");</script>';
                echo '<script>window.location.replace("login.html");</script>';
                exit();
            }
        }
    }
?>