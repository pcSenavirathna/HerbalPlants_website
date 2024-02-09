<?php
// Start or resume the current session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include your database connection file
include_once "config.php"; // Assuming you have a file named config.php

// Fetch user details from the database
$user_id = $_SESSION['user_id'];
$select_user_query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");

// Check for query success and handle errors
if ($select_user_query) {
    $user_data = mysqli_fetch_assoc($select_user_query);

    // Check if the form is submitted for updating user details
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize user input
        $new_username = mysqli_real_escape_string($conn, $_POST['new_username']);

        // Update user name in the database
        $update_user_query = mysqli_query($conn, "UPDATE `users` SET name = '$new_username' WHERE id = '$user_id'");

        if ($update_user_query) {
            // Update session variable
            $_SESSION['user_name'] = $new_username;

            // JavaScript alert and redirect
            echo '<script>';
            echo 'alert("Username is updated.");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            exit();
        } else {
            // Handle the case where the update fails
            echo "Update failed. Please try again.";
        }
    }
} else {
    // Handle query failure
    die("Error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Rubik', sans-serif;
            background: var(--light-bg);
        }

        .editform-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            padding: 2rem;
            border: var(--border);
            background-color: var(--white);
            box-shadow: var(--box-shadow);
            text-align: center;
            width: 50%;
        }

        h2 {
            font-size: 2.5rem;
            text-transform: uppercase;
            color: var(--black);
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: var(--black);
            text-align: left;
        }

        input {
            width: 100%;
            padding: 1.2rem 1.4rem;
            font-size: 1.8rem;
            color: var(--black);
            border: var(--border);
            background-color: var(--light-bg);
            margin: 0.5rem 0;
            border-radius: 0.5rem;
        }

        button {
            width: 100%;
            padding: 1rem 2rem;
            font-size: 1.8rem;
            color: var(--white);
            background-color: var(--green);
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        button:hover {
            background-color: var(--black);
        }
    </style>
    <title>Edit Profile</title>
</head>

<body>
    <section class="editform-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2>Edit Profile</h2>
            <label for="new_username">New Username:</label>
            <input type="text" name="new_username" value="<?php echo $user_data['name']; ?>" required>
            <br>
            <button type="submit">Update Profile</button>
        </form>
    </section>
</body>

</html>
