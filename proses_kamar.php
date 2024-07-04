<?php
include 'koneksi.php';


if(isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'add') {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nokmr = $_POST['nokmr'];
            $tipekmr = $_POST['tipekmr']; 
            $faskmr = $_POST['faskmr'];
            $statkmr = $_POST['statkmr'];
    
            $sql = "INSERT INTO kamar (no_kamar, tipe_kamar, id_fasilitas_kamar, status_kamar) VALUES ('$nokmr', '$tipekmr', '$faskmr', '$statkmr')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>window.location.href = 'view_kamar.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    elseif ($action == 'edit') {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_kamar = $_GET['id_kamar'];
            $sql = "UPDATE kamar SET";

            if(isset($_POST['nokmr']) && !empty($_POST['nokmr'])) {
                $nokmr = $_POST['nokmr'];
                $sql .= " no_kamar='$nokmr',";
            }

            if(isset($_POST['tipekmr']) && !empty($_POST['tipekmr'])) {
                $tipekmr = $_POST['tipekmr'];
                $sql .= " tipe_kamar='$tipekmr',";
            }

            if(isset($_POST['fasilitaskamar']) && !empty($_POST['fasilitaskamar'])) {
                $id_fas = $_POST['fasilitaskamar'];
                $sql .= " id_fasilitas_kamar='$id_fas',";
            }

            if(isset($_POST['status']) && !empty($_POST['status'])) {
                $status = $_POST['status'];
                $sql .= " status_kamar='$status',";
            }

            $sql = rtrim($sql, ',');

            $sql .= " WHERE id_kamar=$id_kamar";

            if (mysqli_query($conn, $sql)) {
                echo "<script>window.location.href = 'view_kamar.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    elseif ($action == 'delete') {
        $id_kamar = $_GET['id_kamar'];
        $sql = "DELETE FROM kamar WHERE id_kamar=$id_kamar";
        if (mysqli_query($conn, $sql)) {
            echo "<script>window.location.href = 'view_kamar.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
}
?>
