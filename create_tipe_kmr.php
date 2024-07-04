<?php
include 'koneksi.php';
include 'get_fungsi.php';
$query = "SELECT *
            FROM tipe_kamar";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe kamar CRUD</title>
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
            color:chocolate;
        }
    </style>
</head>

<body>
    <br>
    <a href="crud_tipe_kmr.php" style="margin-left: 30px; margin-top: 500px;"><i class="fa-solid fa-circle-arrow-left fa-lg-" style="color: #304463;"> Back</i></a>
    <div class="container mt-5" style="width:900px; background-color:#fff; padding:20px; border-radius: 15px; box-shadow: 0 25px 40px #888888;">
        <h2 class="mb-4">Insert Room Type</h2>
        <hr>
        <form method="post" action="proses_tipe_kmr.php?action=add" class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label for="tipe_kmr">Room Type:</label>
                        <input type="text" class="form-control" id="tipe_kmr" name="tipe_kmr" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Description:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label for="hrg_permlm">Price/Night:</label>
                        <input type="number" class="form-control" id="hrg_permlm" name="hrg_permlm" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="hrg_perorg">Price/Person:</label>
                        <input type="number" class="form-control" id="hrg_perorg" name="hrg_perorg" step="0.01" required>
                    </div>
                </div>
            </div>
            <div class="button-container mt-4 col-12" style="display:flex; justify-content: flex-end; gap: 10px">
                <button type="submit" class="btn btn-success" style="width: 100px;">Submit</button>
                <button type="reset" class="btn btn-warning" style="width: 100px;">Reset</button>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>