<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "database123";

// Establish connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    // Retrieve form data
    $name = $_POST['name']; // Changed from $first_name to $name to match the query
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Corrected SQL query
    $sql_query = "INSERT INTO contact (name, email, message) 
                  VALUES ('$name', '$email', '$message')";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql_query)) {
        echo "New Details Entry inserted successfully!";
    } else {
        echo "Error: " . $sql_query . " " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
