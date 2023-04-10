<?php
$connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'galeri'
);
if (!$connect) {
    echo 'Gagal terhubung ke database';
    die;
}
