<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

   
    $checkLoginSql = "SELECT * FROM login WHERE username = ? OR email = ?";
    $stmtCheck = $db->prepare($checkLoginSql);

    if ($stmtCheck) {
        $stmtCheck->bind_param("ss", $username, $email);
        $stmtCheck->execute();
        $stmtCheck->store_result();

        if ($stmtCheck->num_rows > 0) {
            echo "Username or Email already taken.";
        } else {
            
            $insertSql = "INSERT INTO login (nama, email, username, password) VALUES (?, ?, ?, ?)";
            $stmtInsert = $db->prepare($insertSql);

            if ($stmtInsert) {
                $stmtInsert->bind_param("ssss", $nama, $email, $username, $password);

                if ($stmtInsert->execute()) {
                    header("Location:login.php");
                    exit();
                } else {
                    echo "Error: " . $insertSql . "<br>" . $db->error;
                }
            } else {
                echo "Failed to prepare statement for inserting admin: " . $db->error;
            }
        }

        $stmtCheck->close();
    } else {
        echo "Failed to prepare statement for checking admin: " . $db->error;
    }

    $db->close();
}
?>
