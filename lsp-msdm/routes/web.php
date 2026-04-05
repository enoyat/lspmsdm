<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/skema-sertifikasi', function () {
    return view('skema');
});
Route::get('/skema-sertifikasi/{id}', function ($id) {

    // dummy data (nanti bisa dari database)
    $data = [
        'id'        => $id,
        'judul'     => 'Supervisor SDM',
        'kode'      => 'MSDM-002',
        'level'     => 'Level 4',
        'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
        'unit'      => [
            'Menyusun kebutuhan tenaga kerja',
            'Melaksanakan rekrutmen dan seleksi',
            'Mengelola kinerja karyawan',
            'Mengembangkan kompetensi SDM',
        ],
    ];

    return view('skema-detail', compact('data'));
});
