<?php

function getFasilitas($conn)
{
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

function getTipeKamar($conn)
{
    $sql = "SELECT id_tipe_kmr, tipe_kmr FROM tipe_kamar";
    $result = mysqli_query($conn, $sql);
    $tipe_kmr = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tipe_kmr[] = $row;
        }
    }
    return $tipe_kmr;
}

function getkamar($conn)
{
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

function getstatus($conn)
{
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
