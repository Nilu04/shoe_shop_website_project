<?php
$servername = "localhost";
$username = "root"; // Corrected variable name from $usernam to $username
$password = "";
$database_name = "database123";

// Establish connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) { // Changed to ! to check for a failed connection
    die("Connection Failed: " . mysqli_connect_error()); // Added concatenation with . for error message
}

if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Corrected SQL query syntax (added missing semicolon and space correction)
    $sql_query = "INSERT INTO users (first_name, last_name, gender, email, phone) 
                  VALUES ('$first_name', '$last_name', '$gender', '$email', '$phone')";

    if (mysqli_query($conn, $sql_query)) {
        echo "New Details Entry inserted successfully!";
    } else {
        echo "Error: " . $sql_query . " " . mysqli_error($conn); // Changed from $sql to $sql_query
    }
    mysqli_close($conn);
}
?>
