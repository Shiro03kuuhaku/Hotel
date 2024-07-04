<?php
    include 'koneksi.php';
    $query = "SELECT *
                FROM tipe_kamar";
    $result = mysqli_query($conn, $query);
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tipe Kamar CRUD</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="view_kamar.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .container-fluid {
            height: 100%;
            display: flex;
            padding: 0px;
        }

        table {
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<div class="container-fluid">
    <div class="sidebar">
        <div class="sidebar-header" style="background-color: rgba(0, 0, 0, 0.2);">
            <br>
            <div class="profile-pic"></div>
            <p>Hello, Admin</p>
            <br>
        </div>
        <ul class="sidebar-menu">
            <li><a href="homepage_admin.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Customers</a></li>
            <li><a href="#"><i class="fa-solid fa-book"></i> Bookings</a></li>
            <li><a href="view_kamar.php"><i class="fas fa-th-list"></i> Rooms</a></li>
            <li><a href="#"><i class="fa-solid fa-file"></i> Reports</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
        </ul>
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2); margin-top: 110px;">
            <a class="text-white" href="homepage.php">Nothing's</a>
        </div>
    </div>
    <div class="main-content" style="margin-left: 200px;">
        <section class="content">
            <h2 style="margin-top: 50px; margin-bottom: -100px; text-align: center;">ROOMS TYPE</h2>
            <a href="create_tipe_kmr.php" class="btn btn-primary mb-2" style="float: right; margin-top: -100; width:80px;"><i class="fa-solid fa-circle-plus"></i> Add</a>
            <table style="margin-top: -100px;" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <!-- <th>Id Kamar</th> -->
                        <th class="text-center" width="5%">No</th>
                        <th>Room Type</th>
                        <th>Description</th>
                        <th>Price/Night</th>
                        <th>Price/Person</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?= $row['tipe_kmr'] ?></td>
                        <td><?= $row['deskripsi'] ?></td>
                        <td><?= $row['hrg_kmr'] ?></td>
                        <td><?= $row['hrg_per_org'] ?></td>
                        <td>
                            <a href="edit_tipe_kmr.php?id_tipe_kmr=<?= $row['id_tipe_kmr'] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="proses_tipe_kamar.php?action=delete&id_tipe_kmr=<?= $row['id_tipe_kmr'] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </section>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>

</html>