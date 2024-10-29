<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - XAMPP Data Server</title>
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
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        /* Style the button */
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

        /* Define fadeIn animation */
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
        <a href="shop.php">Shop</a>
        <a href="addCart.php">AddCart</a>
        <a href="contact.php">Contact Us</a>
        <a href="account.php">Account</a>
        <a href="about.php">About Us</a>
    </div>

    <div class="form-container">
        <h1 style="text-align: center;">Contact Us</h1>
        <form action="contact form.php" method="post">
            <table border="0" align="center">
                <tr>
                    <td><label>Enter Your Name</label></td>
                    <td><input type="text" name="name" required></td>
                </tr>

                <tr>
                    <td><label>Enter Your Email</label></td>
                    <td><input type="email" name="email" required></td>
                </tr>

                <tr>
                    <td><label>Your Message</label></td>
                    <td><textarea name="message" rows="4" required></textarea></td>
                </tr>

                <tr>
                <tr>
    <td colspan="2" align="center" style="padding-top: 20px;">
        <input type="submit" name="save" value="Send Message" class="safe-button" style="margin-right: 10px;">
        <input type="button" value="View Message" class="safe-button" onclick="window.location.href='get_contact_data.php';">
    </td>
</tr>


                </tr>
            </table>
        </form>
    </div>
</body>
</html>