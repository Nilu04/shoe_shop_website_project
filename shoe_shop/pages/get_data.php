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

// Default query to fetch all users
$sql_query = "SELECT id, first_name, last_name, gender, email, phone FROM users";

// Check if a search term is provided
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql_query .= " WHERE first_name LIKE '%$search%'";
}

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
        .search-bar { text-align: center; margin-bottom: 20px; }
        .search-bar input[type="text"] { padding: 8px; width: 60%; }
        .search-bar input[type="submit"] { padding: 8px 16px; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        .actions button { padding: 6px 12px; cursor: pointer; border: none; border-radius: 4px; }
        .edit { background-color: #FFA726; color: white; }
        .delete { background-color: #E57373; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Data</h1>
        <div class="search-bar">
            <form action="get_data.php" method="GET">
                <input type="text" name="search" placeholder="Search by First Name" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <input type="submit" value="Search">
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>
                                <a href='edit_data.php?id=" . $row['id'] . "'><button class='edit'>Edit</button></a>
                                <a href='delete_data.php?id=" . $row['id'] . "'><button class='delete' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</button></a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
