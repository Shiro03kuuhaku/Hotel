<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar CRUD</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        table {
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body class="container">
    <div class="content">
        <h2 style="margin-top: 50px; text-align: center;">DATA KAMAR KAMI  </h2>
        <hr>
        <a href="crud_kamar.php?action=add" class="btn btn-primary mb-2" style="float: right;">Tambah</a>
        <br><br>

        <?php
        function closeDB($conn) {
            mysqli_close($conn);
        }

        function KamarView($conn) {
        $query = "SELECT 
                    k.id_kamar, 
                    k.no_kamar,
                    k.tipe_kamar, 
                    f.nama_fasilitas_kamar, 
                    k.status_kamar 
                FROM kamar k 
                INNER JOIN fasilitas_kamar f ON k.id_fasilitas_kamar = f.id_fasilitas_kamar ORDER BY k.id_kamar ASC";
        $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        return;
    }

    if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Nama Fasilitas</th>
                    <th>Status Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['no_kamar'] ?></td>
                <td><?= $row['tipe_kamar'] ?></td>
                <td><?= $row['nama_fasilitas_kamar'] ?></td>
                <td><?= $row['status_kamar'] ?></td>
                <td>
                    <a href="crud_kamar.php?action=edit&id_kamar=<?= $row['id_kamar'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="crud_kamar.php?action=delete&id_kamar=<?= $row['id_kamar'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </table>
        <br><br>
        <?php
    } else {
        ?>
        <div class="alert alert-warning">Data Tidak Ada</div>
        <?php
    }
}


        function getFasilitas($conn) {
            $sql = "SELECT id_fasilitas_kamar, nama_fasilitas_kamar FROM fasilitas_kamar";
            $result = mysqli_query($conn, $sql);
            $fas_kamar = [];
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fas_kamar[] = $row;
                }
            }
            return $fas_kamar;
        }

        function getkamar($conn) {
            $sql = "SELECT id_kamar, tipe_kamar FROM kamar";
            $result = mysqli_query($conn, $sql);
            $tipekmr = ['Standart', 'Executive', 'Deluxe'];

            $datakmr = [];
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $datakmr[] = $row;
                }
            }
            return [$tipekmr, $datakmr];
        }

        function getstatus($conn) {
            $sql = "SELECT id_kamar, status_kamar FROM kamar";
            $result = mysqli_query($conn, $sql);
            $statkmr = ['Tersedia', 'Dipesan', 'Ditempati'];

            $status = [];
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $status[] = $row;
                }
            }
            return [$statkmr, $status];
        }

        if (isset($_GET['action'])) {
            $action = $_GET['action'];

            if ($action == 'add') {
                ?>
                <h3>Insert Data Kamar</h3>
                <br>
                <form method="post" action="proses_kamar.php?action=add" class="form-group">
                    <div class="form-row" style="display: flex;">
                        <div class="form-group col-md-5">
                            No Kamar: <input type="text" name="nokmr" class="form-control mb-2" required>
                            <br>
                        </div>
                        <div class="form-group col-md-5" style="margin-left: 30px;">
                            Tipe Kamar: 
                            <select name="tipekmr" class="form-control mb-2" required>
                                <option selected>- Pilih Kamar -</option>
                                <?php
                                list($enumTipekmr, $kamar) = getkamar($conn);
                                foreach ($enumTipekmr as $enumItem) {
                                    ?>
                                    <option value="<?= $enumItem ?>"><?= $enumItem ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-row" style="display: flex;">
                        <div class="form-group col-md-5">
                            fasilitas Kamar: 
                            <select name="faskmr" class="form-control mb-2" required>
                                <option selected>- Pilih Fasilitas -</option>
                                <?php
                                $fas = getFasilitas($conn);
                                foreach ($fas as $item) {
                                    ?>
                                    <option value="<?= $item['id_fasilitas_kamar'] ?>"><?= $item['nama_fasilitas_kamar'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <br>
                        </div>
                        <div class="form-group col-md-5" style="margin-left: 30px;">
                            Status Kamar: 
                            <select name="statkmr" class="form-control mb-2" required>
                                <option selected>- Status Kamar -</option>
                                <?php
                                list($enumstat, $status) = getstatus($conn);

                                foreach ($enumstat as $enumStatus) {
                                   ?>
                                    <option value="<?= $enumStatus ?>"><?= $enumStatus ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <br>
                        </div>
                    </div>
                        <div class="form-group col-md-2">
                            <input type="submit" value="Kirim" class="btn btn-success mt-4" style="width: 80px; margin-left: 20px;">
                        </div>
                    </div>
                </form>
                <?php
            }

            elseif ($action == 'edit') {
                $id_kamar = $_GET['id_kamar'];
                $query = "SELECT * FROM kamar WHERE id_kamar = $id_kamar";
                $result = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($result);

                $nokmr = $data['no_kamar'];
                $tipe = $data['tipe_kamar'];
                $id_fasilitas_kamar = $data['id_fasilitas_kamar'];
                $status = $data['status_kamar'];
                ?>
                <h3>Edit Data Kamar</h3>
                <form method="post" action="proses_kamar.php?action=edit&id_kamar=<?= $id_kamar ?>" class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            No Kamar: <input value="<?= $nokmr ?>" type="text" name="nokmr" class="form-control mb-2"><br>
                        </div>
                        <div class="form-group col-md-4">
                            Tipe Kamar: 
                            <select name="tipekmr" class="form-control mb-2">
                                <?php
                                $kamar = getkamar($conn);
                                foreach ($kamar as $item) {
                                    $selected = $item['id_kamar'] == $kamar ? 'selected' : '';
                                    ?>
                                    <option value="<?= $item['id_kamar'] ?>" <?= $selected ?>><?= $item['tipe_kamar'] ?></option>
                                    <?php
                                }
                                ?>
                            </select><br>
                        </div>
                        <div class="form-group col-md-4">
                            Fasilitas Kamar: 
                            <select name="fasilitaskamar" class="form-control mb-2">
                                <?php
                                $fas_kamar = getFasilitas($conn);
                                foreach ($fas_kamar as $item) {
                                    $selected = $item['id_fasilitas_kamar'] == $fas_kamar ? 'selected' : '';
                                    ?>
                                    <option value="<?= $item['id_fasilitas_kamar'] ?>" <?= $selected ?>><?= $item['nama_fasilitas_kamar'] ?></option>
                                    <?php
                                }
                                ?>
                            </select><br>
                        </div>
                        <div class="form-group col-md-4">
                            Status Kamar: 
                            <select name="status" class="form-control mb-2">
                                <?php
                                $status = getstatus($conn);
                                foreach ($status as $item) {
                                    $selected = $item['status_kamar'] == $status ? 'selected' : '';
                                    ?>
                                    <option value="<?= $item['id_kamar'] ?>" <?= $selected ?>><?= $item['status_kamar'] ?></option>
                                    <?php
                                }
                                ?>
                            </select><br>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="submit" value="Simpan Perubahan" class="btn btn-success mt-4" style=" margin-left: 20px;">
                        </div>
                    </div>
                </form>
                <?php
            }

            elseif ($action == 'delete') {
                $id_kamar = $_GET['id_kamar'];
                ?>
                <script>
                    var confir = confirm('Apakah Anda yakin ingin menghapus transaksi ini?');
                    if (confir) {
                        window.location.href = 'proses_kamar.php?action=delete&id_kamar=<?= $id_kamar ?>';
                    } else {
                        window.location.href = 'crud_kamar.php';
                    }
                </script>
                <?php
            }
        }

        KamarView($conn);
        ?>
    </div>
    
<script src="js/bootstrap.min.js"></script>
</body>
</html>