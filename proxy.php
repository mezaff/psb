<?php
// Mengambil parameter dari URL
$type = isset($_GET['type']) ? $_GET['type'] : null;
$provinsi = isset($_GET['provinsi']) ? $_GET['provinsi'] : null;
$kabupaten = isset($_GET['kabupaten']) ? $_GET['kabupaten'] : null;
$kecamatan = isset($_GET['kecamatan']) ? $_GET['kecamatan'] : null;
$desa = isset($_GET['desa']) ? $_GET['desa'] : null;

switch ($type) {
    case 'provinsi':
        $url = 'https://alamat.thecloudalert.com/api/provinsi/get/';
        break;
    case 'kabupaten':
        if ($provinsi) {
            $url = 'https://alamat.thecloudalert.com/api/kabkota/get/?d_provinsi_id=' . $provinsi;
        } else {
            echo json_encode(['error' => 'ID Provinsi tidak diberikan']);
            exit;
        }
        break;
    case 'kecamatan':
        if ($provinsi && $kabupaten) {
            $url = 'https://alamat.thecloudalert.com/api/kecamatan/get/?d_kabkota_id=' . $kabupaten;
        } else {
            echo json_encode(['error' => 'ID Provinsi atau Kabupaten tidak diberikan']);
            exit;
        }
        break;
    case 'desa':
        if ($provinsi && $kabupaten && $kecamatan) {
            $url = 'https://alamat.thecloudalert.com/api/kelurahan/get/?d_kecamatan_id=' . $kecamatan;
        } else {
            echo json_encode(['error' => 'ID Provinsi, Kabupaten atau Kecamatan tidak diberikan']);
            exit;
        }
        break;
    case 'kodepos':
        if ($provinsi && $kabupaten && $kecamatan && $desa) {
            $url = 'https://alamat.thecloudalert.com/api/kodepos/get/?d_kabkota_id=' . $kabupaten . '&d_kecamatan_id=' . $kecamatan;
        } else {
            echo json_encode(['error' => 'Semua parameter wilayah (provinsi, kabupaten, kecamatan, desa) harus disediakan']);
            exit;
        }
        break;
    default:
        echo json_encode(['error' => 'Tipe wilayah tidak valid']);
        exit;
}

$response = file_get_contents($url);
if ($response !== false) {
    echo $response;
} else {
    echo json_encode(['error' => 'Data tidak ditemukan']);
}
