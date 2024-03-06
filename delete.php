<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $conn = mysqli_connect('localhost', 'root', '', 'carshop');

        $carnumber = mysqli_real_escape_string($conn, $_POST['carnumber']);

        $query = "SELECT Photo FROM car WHERE ID = '$carnumber'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $photoPath = $row['Photo'];

            if (unlink($photoPath)) {

                $deleteQuery = "DELETE FROM car WHERE ID = '$carnumber'";

                if (mysqli_query($conn, $deleteQuery)) {
                    echo("<script>alert('Deleted Successfully')</script>");
                    header("Location: car.php");
                    exit();
                } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            } else {
                echo "Error deleting photo file.";
            }
        } else {
            echo("<script> alert('Car Not Found') </script>");
        }

        mysqli_close($conn);
    }
?>
