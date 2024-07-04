<?php
include 'koneksi.php';
include 'get_fungsi.php';
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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        label {
            color: chocolate
        }

        a {
            font-size: 16pt;
        }

        a:hover {
            color: chocolate;
        }
    </style>
</head>

<body>
    <br>
    <a href="view_kamar.php" style="margin-left: 30px; margin-top: 500px;"><i class="fa-solid fa-circle-arrow-left fa-lg-" style="color: #304463;"> Back</i></a>
    <div class="container mt-5" style="width:900px; background-color:#fff; padding:20px; border-radius: 15px; box-shadow: 0 25px 40px #888888;">
        <h2>Insert Room</h2>
        <hr>
        <br>
        <form method="post" action="proses_kamar.php?action=add" class="form-group">
            <div class="form-row" style="display: flex;">
                <div class="form-group col-md-5">
                    Room Number: <input type="text" name="nokmr" class="form-control mb-2" required>
                    <br>
                </div>
                <div class="form-group col-md-5" style="margin-left: 30px;">
                    Room Type:
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
                    Room Facility:
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
                    Room Status:
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
            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-success" style="width: 100px;">Send</button>
                <button type="reset" class="btn btn-warning" style="width: 100px;">Reset</button>
            </div>
        </form>
    </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>