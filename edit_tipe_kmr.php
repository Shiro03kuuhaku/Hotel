<?php
include 'koneksi.php';
include 'get_fungsi.php';

if (isset($_GET['id_tipe_kmr'])) {
    $id_tipe_kmr = $_GET['id_tipe_kmr'];
    $query = "SELECT * FROM tipe_kamar WHERE id_tipe_kmr = $id_tipe_kmr";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        $tipe_kmr = $data['tipe_kmr'];
        $deskripsi = $data['deskripsi'];
        $hrg_permlm = $data['hrg_kmr'];
        $hrg_perorg = $data['hrg_per_org'];
    } else {
        echo "Data not found for id_kamar: $id_tipe_kmr";
        exit;
    }
} else {
    echo "Tidak ada id_kamar yang terpilih";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kamar</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        label {
            color: chocolate;
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
    <a href="crud_tipe_kmr.php" style="margin-left: 30px; margin-top: 500px;"><i class="fa-solid fa-circle-arrow-left fa-lg-" style="color: #304463;"> Back</i></a>
    <div class="container mt-5 mb-5" style="width:900px; background-color:#fff; padding:20px; border-radius: 15px; box-shadow: 0 25px 40px #888888;">
        <h2 style="margin-top: 50px; text-align: center;">EDIT ROOM TYPE</h2>
        <hr>
        <form method="post" action="proses_tipe_kmr.php?action=edit&id_tipe_kmr=<?= $id_tipe_kmr ?>" class="form-group">
            <div class="form-row" style="display: flex; gap:50px;">
                <div class="form-group col-md-5" style="margin-left:30px;">
                    Room Type :<input value="<?= htmlspecialchars($tipe_kmr) ?>" type="text" name="tipe_kmr" class="form-control mb-2" required><br>
                </div>
                <div class="form-group col-md-5" style="margin-left:30px;">
                <textarea name="deskripsi" class="form-control mb-2" required><?= htmlspecialchars($deskripsi) ?></textarea>
                </div>
            </div>
            <div class="form-row" style="display: flex; gap:50px;">
                <div class="form-group col-md-5" style="margin-left:30px;">
                    Price/Night :<input value="<?= htmlspecialchars($hrg_permlm) ?>" type="number" name="hrg_permlm" class="form-control mb-2" required><br>
                </div>
                <div class="form-group col-md-5" style="margin-left:30px;">
                    Price/Person : <input value="<?= htmlspecialchars($hrg_perorg) ?>" type="number" name="hrg_perorg" class="form-control mb-2" required>
                </div>
            </div>
            <div class="button-container mt-4 col-12" style="display:flex; justify-content: flex-end; gap: 10px">
                <input type="submit" value="Simpan Perubahan" class="btn btn-success mt-4" style=" margin-left: 20px;">
            </div>
        </form>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>