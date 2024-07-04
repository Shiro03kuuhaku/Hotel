<?php
require "koneksi.php"; 
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    if (empty($username) || empty($password)) {
        echo "Username or password is empty.";
        exit();
    }

    $sql = "SELECT id_admin, nama, email, password FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql); 
    if ($stmt === false) {
        echo "Error preparing statement: " . $conn->error;
        exit();
    }
    
    $stmt->bind_param("s", $username); 
    if (!$stmt->execute()) {
        echo "Error executing statement: " . $stmt->error;
        exit();
    }

    $stmt->store_result(); 

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_admin, $nama, $email, $hashed_password); 
        $stmt->fetch(); 

        if (password_verify($password, $hashed_password)) {
            $_SESSION['id_admin'] = $id_admin;
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            header("Location: homepage_admin.php"); 
            exit(); 
        } else {
            echo "Invalid password."; 
            error_log("Password verification failed. Username: $username, Hashed Password: $hashed_password, Entered Password: $password");
            header("Location: login.php");             
        }
    } else {
        echo "No admin found with that username."; 
    }

    $stmt->close(); 
    $conn->close(); 
}
