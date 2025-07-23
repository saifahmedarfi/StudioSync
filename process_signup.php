<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $stage_name = mysqli_real_escape_string($conn, $_POST['stage_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $instrument = mysqli_real_escape_string($conn, $_POST['instrument']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO artists (fullname, stage_name, username, email, genre, instrument, password)
            VALUES ('$fullname', '$stage_name', '$username', '$email', '$genre', '$instrument', '$password_hash')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['artist_id'] = mysqli_insert_id($conn);
        header("Location: artist/dashboard.php");
        exit;
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    header("Location: joinasartist.php");
    exit;
}
