<?php
include 'koneksi.php';
include 'get_fungsi.php';

if (isset($_GET['id_kamar'])) {
    $id_kamar = $_GET['id_kamar'];
    $query = "SELECT * FROM kamar WHERE id_kamar = $id_kamar";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        $nokmr = $data['no_kamar'];
        $tipe = $data['tipe_kamar'];
        $id_fasilitas_kamar = $data['id_fasilitas_kamar'];
        $status = $data['status_kamar'];
    } else {
        echo "Data not found for id_kamar: $id_kamar";
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
    <a href="view_kamar.php" style="margin-left: 30px; margin-top: 500px;"><i class="fa-solid fa-circle-arrow-left fa-lg-" style="color: #304463;"> Back</i></a>
    <div class="container mt-5 mb-5" style="width:900px; background-color:#fff; padding:20px; border-radius: 15px; box-shadow: 0 25px 40px #888888;">
        <h2 style="margin-top: 50px; text-align: center;">EDIT ROOM</h2>
        <hr>
        <form method="post" action="proses_kamar.php?action=edit&id_kamar=<?= $id_kamar ?>" class="form-group">
            <div class="form-row" style="display: flex; gap:50px;">
                <div class="form-group col-md-5" style="margin-left:30px;">
                    No Kamar: <input value="<?= htmlspecialchars($nokmr) ?>" type="text" name="nokmr" class="form-control mb-2" required><br>
                </div>
                <div class="form-group col-md-5">
                    Tipe Kamar:
                    <select name="tipekmr" class="form-control mb-2" required>
                        <?php
                        list($enumTipekmr, $kamar) = getkamar($conn);
                        foreach ($enumTipekmr as $enumItem) {
                            $selected = ($enumItem == $tipe) ? 'selected' : '';
                        ?>
                            <option value="<?= htmlspecialchars($enumItem) ?>" <?= $selected ?>><?= htmlspecialchars($enumItem) ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                </div>

            </div>
            <div class="form-row" style="display: flex; gap:50px;">
                <div class="form-group col-md-5" style="margin-left:30px;">
                    Fasilitas Kamar:
                    <select name="fasilitaskamar" class="form-control mb-2" required>
                        <?php
                        $fas_kamar = getFasilitas($conn);
                        foreach ($fas_kamar as $item) {
                            $selected = ($item['id_fasilitas_kamar'] == $id_fasilitas_kamar) ? 'selected' : '';
                        ?>
                            <option value="<?= htmlspecialchars($item['id_fasilitas_kamar']) ?>" <?= $selected ?>><?= htmlspecialchars($item['nama_fasilitas_kamar']) ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                </div>
                <div class="form-group col-md-5">
                    Status Kamar:
                    <select name="status" class="form-control mb-2" required>
                        <?php
                        list($enumstat, $statusOptions) = getstatus($conn);
                        foreach ($enumstat as $enumStatus) {
                            $selected = ($enumStatus == $status) ? 'selected' : '';
                        ?>
                            <option value="<?= htmlspecialchars($enumStatus) ?>" <?= $selected ?>><?= htmlspecialchars($enumStatus) ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
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