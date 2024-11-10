<?php

$connection = mysqli_connect("localhost", "root", "", "book_db");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Prepare an insert statement
    $query = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Initialize statement
    $stmt = mysqli_prepare($connection, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Successful insertion, redirect to book.php
        header("Location: book.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Close the statement
    mysqli_stmt_close($stmt);

} else {
    echo 'Something went wrong <br>';
    echo 'Try again';
}

// Close the database connection
mysqli_close($connection);

?>
