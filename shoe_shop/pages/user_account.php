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

// Fetch data from the database
$sql_query = "SELECT first_name, last_name, gender, email, phone FROM users";
$result = mysqli_query($conn, $sql_query);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        .container { width: 80%; margin: 50px auto; padding: 20px; background: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; }
        h1 { text-align: center; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Data</h1>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
