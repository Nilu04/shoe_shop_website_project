<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "database123";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_query = "DELETE FROM users WHERE id = $id";

    if (mysqli_query($conn, $sql_query)) {
        echo "Record deleted successfully";
        header("Location: get_data.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
