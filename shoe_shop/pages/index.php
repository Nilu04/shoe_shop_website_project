<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Sample Practical Project - XAMPP Data Server</title>
    <style>
        /* Style the body with background image and animations */
        body {
            background-image: url('background.jpg'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        /* Style the navigation bar */
        .navbar {
            display: flex;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            margin-bottom: 20px;
        }

        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the form container */
        .form-container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        /* Style the button with CSS */
        .safe-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .safe-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Define a simple fadeIn animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
    <a href="index.php">Sign in</a>
        <a href="home.php">Home</a>
        <a href="contact.php">Contact Us</a>
        <a href="account.php">Account</a>
        <a href="about.php">About Us</a>
    </div>

    <div class="form-container">
        <h1 style="text-align: center;">Personal Details Table</h1>
        <form action="code.php" method="post">
            <table border="0" align="center">
                <tr>
                    <td><label>Enter First Name</label></td>
                    <td><input type="text" name="first_name"></td>
                </tr>

                <tr>
                    <td><label>Enter Last Name</label></td>
                    <td><input type="text" name="last_name"></td>
                </tr>

                <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>

                <tr>
                    <td><label>Enter Email</label></td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td><label>Enter Phone</label></td>
                    <td><input type="tel" name="phone"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" name="save" value="Submit" class="safe-button"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
