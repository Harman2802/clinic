<?php
include('connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

if ($password !== $confirm_password) {
    echo "Passwords do not match!";
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Use the correct column name from your database (e.g., patient_email)
$check_query = "SELECT * FROM patient WHERE patient_email='$email'";
$result = mysqli_query($conn, $check_query);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "Email already exists!";
} else {
    $insert = "INSERT INTO patient (fname, lname, patient_email, contact, password)
               VALUES ('$fname', '$lname', '$email', '$contact', '$hashed_password')";
    
    if (mysqli_query($conn, $insert)) {
        echo "Patient account created successfully!";
        // redirect or show success
    } else {
        echo "Insert failed: " . mysqli_error($conn);
    }
}
?>
