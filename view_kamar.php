<?php
include 'koneksi.php';
$query = "SELECT 
                k.id_kamar, 
                k.no_kamar,
                k.tipe_kamar, 
                f.nama_fasilitas_kamar, 
                k.status_kamar 
            FROM kamar k 
            INNER JOIN fasilitas_kamar f ON k.id_fasilitas_kamar = f.id_fasilitas_kamar ORDER BY k.id_kamar ASC";
$result = mysqli_query($conn, $query);
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar CRUD</title>
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
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
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
            <h2 style="margin-top: 50px; text-align: center;">ROOMS DATA</h2>
            <hr>
            <a href="create_kamar.php" class="btn btn-primary mb-2" style="float: right; width:80px;"><i class="fa-solid fa-circle-plus"></i> Add</i></a>
            <br><br>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <!-- <th>Id Kamar</th> -->
                        <th class="text-center" width="5%">No</th>
                        <th width="15%">Room Number</th>
                        <th>Room Type</th>
                        <th>Fasilities</th>
                        <th>Room Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?= $row['no_kamar'] ?></td>
                        <td><?= $row['tipe_kamar'] ?></td>
                        <td><?= $row['nama_fasilitas_kamar'] ?></td>
                        <td><?= $row['status_kamar'] ?></td>
                        <td>
                            <a href="edit_kamar.php?id_kamar=<?= $row['id_kamar'] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <a href="proses_kamar.php?action=delete&id_kamar=<?= $row['id_kamar'] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> Delete</a>
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