<?php
include("./connect_DB.php");

// Getting the user's input.
$login_email = $_POST["login_email"];
$login_password = $_POST["login_password"];

// Authentication to check if the email exists.
$query = "SELECT * FROM register WHERE email = '$login_email'";
$query_result = mysqli_query($conn, $query);

if (!$query_result) {
    // Check for database query errors.
    echo "Error: " . mysqli_error($conn);
} else {
    if (mysqli_num_rows($query_result) == 1) {
        $row = mysqli_fetch_assoc($query_result);
        if (password_verify($login_password, $row["password"])) {
            echo "<script> alert('LOGIN SUCCESSFUL !'); window.location='home.php'</script>";
            // You can add further login logic here if needed
        } else {
            echo "<script> alert('Incorrect Password !'); window.location='login.php'</script>";
        }
    } else {
        echo "<script> alert('User not found !'); window.location='login.php'</script>";
    }
}

// Close the database connection.
mysqli_close($conn);
