<?php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Password validation
    if ($password != $confirmPassword) {
        die("Password and Confirm Password do not match");
    }

    // Check if user already exists with the given email or phone
    $checkUserQuery = "SELECT * FROM users WHERE email = '$email' OR phone_number = '$phone'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {
        die("User with the given email or phone number already exists");
    }

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $insertUserQuery = "INSERT INTO users (full_name, email, phone_number, password_hash)
                        VALUES ('$fullName', '$email', '$phone', '$hashedPassword')";

    if ($conn->query($insertUserQuery) === TRUE) {
        header("Location: Signup_Successful.html");
        exit();
    } else {
        die("Error: " . $insertUserQuery . "<br>" . $conn->error);
    }
}

// Close the database connection
$conn->close();
?>
