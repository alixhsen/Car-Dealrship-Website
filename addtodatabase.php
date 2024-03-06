<?php
    $conn = mysqli_connect('localhost', 'root', '', 'carshop');
    if (!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }

    if (!mysqli_select_db($conn, 'carshop')) {
        die("No DataBase");
    }

    $number = $_POST['carnumber'];
    $name = $_POST['carname'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $targetDirectory = "Images/";

    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["photo"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $checknumber = "SELECT * FROM car WHERE ID = $number";
    $checkResult = mysqli_query($conn, $checknumber);
    if (mysqli_num_rows($checkResult) > 0) {
        echo("<script>alert('Car number already exists.')</script>");
        header("Location: car.php");
        exit();
    }
    else
    {
        $query = "INSERT INTO car (ID, `Car Name`, `Description`, Price, Photo) 
                VALUES ('$number', '$name', '$description', '$price', '$targetFile')";

        if (mysqli_query($conn, $query)) {
            echo("<script>alert('Added Successfully')</script>;");
            header("Location: car.php");
            exit();
        } else {
            echo("Cannot Insert Car: " . mysqli_error($conn));
        }
    }
?>
