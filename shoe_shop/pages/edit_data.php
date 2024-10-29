<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "database123";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Fetch user data to edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql_query);
    $user = mysqli_fetch_assoc($result);
}

// Update user data in the database
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update_query = "UPDATE users SET first_name='$first_name', last_name='$last_name', gender='$gender', email='$email', phone='$phone' WHERE id=$id";

    if (mysqli_query($conn, $update_query)) {
        echo "Record updated successfully";
        header("Location: get_data.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User Data</h2>
    <form action="edit_data.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label>First Name:</label><br>
        <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>"><br>
        <label>Last Name:</label><br>
        <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>"><br>
        <label>Gender:</label><br>
        <input type="text" name="gender" value="<?php echo $user['gender']; ?>"><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
