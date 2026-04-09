<?php
namespace App\Http\Controllers;

use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::kategori('gallery')->latest()->get();
        $carousel = Gallery::kategori('carousel')->latest()->get();
        return view('home', compact('gallerys', 'carousel'));
    }
    public function listgallery()
    {
        $gallerys = Gallery::latest()->paginate(12);
        return view('gallery', compact('gallerys'));
    }
    public function skemasertifikasi()
    {
        // dummy data (nanti bisa dari database)
        $data = [
            [
                'id'        => 1,
                'judul'     => 'Staff SDM',
                'kode'      => 'MSDM-001',
                'level'     => 'Level 3',
                'biaya'     => 'Rp 750.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
            ],
            [
                'id'        => 2,
                'judul'     => 'Supervisor SDM',
                'kode'      => 'MSDM-002',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
            ],
            [
                'id'        => 3,
                'judul'     => 'Supervisor Rekrutmen & Seleksi Sumber Daya Manusia',
                'kode'      => 'MSDM-003',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
            [
                'id'        => 4,
                'judul'     => 'Kepala Bagian SDM',
                'kode'      => 'MSDM-004',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
            [
                'id'        => 5,
                'judul'     => 'Manajer SDM',
                'kode'      => 'MSDM-005',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
        ];

        return view('skema', compact('data'));
        //
    }
    public function skemadetail($id)
    {
        // dummy data (nanti bisa dari database)

        $data = [
            [
                'id'        => 1,
                'judul'     => 'Staff SDM',
                'kode'      => 'MSDM-001',
                'level'     => 'Level 3',
                'biaya'     => 'Rp 750.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun kebutuhan tenaga kerja'],
                    ['M.70SDM01.057.2', 'Melaksanakan rekrutmen dan seleksi'],
                    ['M.70SDM01.058.2', 'Mengelola kinerja karyawan'],
                    ['M.70SDM01.059.2', 'Mengembangkan kompetensi SDM'],
                ],
                'syarat'    => [
                    'Fotokopi KTP',
                    'Pasfoto berwarna ukuran 3x4 sebanyak 2 lembar',
                    'Fotokopi ijazah pendidikan terakhir (Min. SMA/SMK)',
                    'Surat pengalaman kerja relevan (Min. 1-3 tahun tergantung pendidikan)',
                    'Sertifikat pelatihan berbasis kompetensi (Bila ada)',
                    'Formulir Permohonan FR.APL.01 dan Asesmen Mandiri FR.APL.02',
                ],
            ],
            [
                'id'        => 2,
                'judul'     => 'Supervisor SDM',
                'kode'      => 'MSDM-002',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.023.2', 'Menyusun Sistem Remunerasi'],
                    ['M.70SDM01.031.2', 'Menyusun Kebutuhan Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.042.2', 'Membuat Kesepakatan Kerja'],
                ],
                'syarat'    => [
                    'Fotokopi KTP',
                    'Pasfoto berwarna ukuran 3x4 sebanyak 2 lembar',
                    'Fotokopi ijazah pendidikan terakhir (Min. SMA/SMK)',
                    'Surat pengalaman kerja relevan (Min. 1-3 tahun tergantung pendidikan)',
                    'Sertifikat pelatihan berbasis kompetensi (Bila ada)',
                    'Formulir Permohonan FR.APL.01 dan Asesmen Mandiri FR.APL.02',
                ],
            ],
            [
                'id'        => 3,
                'judul'     => 'Supervisor Rekrutmen & Seleksi Sumber Daya Manusia',
                'kode'      => 'MSDM-003',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.017.2', 'Melakukan Proses Rekrutmen'],
                    ['M.70SDM01.018.2', 'Melakukan Proses Seleksi'],
                    ['M.70SDM01.020.2', 'Melakukan Penawaran Kerja Kepada Calon Pekerja'],

                ],
                'syarat'    => [
                    'Fotokopi KTP',
                    'Pasfoto berwarna ukuran 3x4 sebanyak 2 lembar',
                    'Fotokopi ijazah pendidikan terakhir (Min. SMA/SMK)',
                    'Surat pengalaman kerja relevan (Min. 1-3 tahun tergantung pendidikan)',
                    'Sertifikat pelatihan berbasis kompetensi (Bila ada)',
                    'Formulir Permohonan FR.APL.01 dan Asesmen Mandiri FR.APL.02',
                ],
            ],
            [
                'id'        => 4,
                'judul'     => 'Kepala Bagian SDM',
                'kode'      => 'MSDM-004',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.017.2', 'Melakukan Proses Rekrutmen'],
                    ['M.70SDM01.023.2', 'Menyusun Sistem Remunerasi'],
                    ['M.70SDM01.026.2', 'Mengelola Proses Perumusan Indikator Kinerja Individu'],
                    ['M.70SDM01.031.2', 'Menyusun Kebutuhan Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.033.2', 'Melaksanakan Kegiatan Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.042.2', 'Membuat Kesepakatan Kerja'],
                    ['M.70SDM01.047.2', 'Menangani Keluhan Pekerja'],
                    ['M.70SDM01.048.2', 'Mengelola Proses Pelaksanaan Tindakan Disiplin'],
                ],
                'syarat'    => [
                    'Fotokopi KTP',
                    'Pasfoto berwarna ukuran 3x4 sebanyak 2 lembar',
                    'Fotokopi ijazah pendidikan terakhir (Min. SMA/SMK)',
                    'Surat pengalaman kerja relevan (Min. 1-3 tahun tergantung pendidikan)',
                    'Sertifikat pelatihan berbasis kompetensi (Bila ada)',
                    'Formulir Permohonan FR.APL.01 dan Asesmen Mandiri FR.APL.02',
                ],
            ],
            [
                'id'        => 5,
                'judul'     => 'Manajer SDM',
                'kode'      => 'MSDM-005',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
                'unit'      => [
                    ['M.70SDM01.001.2', 'Merumuskan Strategi dan Kebijakan Manajemen Sumber Daya Manusia (MSDM)'],
                    ['M.70SDM01.005.2', 'Merumuskan Proses Bisnis serta Tugas dan Fungsi dalam Organisasi'],
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.011.2', 'Melaksanakan Analisis Beban Kerja'],
                    ['M.70SDM01.012.2', 'Menyusun Kebutuhan SDM'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.022.2', 'Menyusun Grading Jabatan'],
                    ['M.70SDM01.023.2', 'Menyusun Sistem Remunerasi'],
                    ['M.70SDM01.024.2', 'Menentukan Upah Pekerja'],
                    ['M.70SDM01.026.2', 'Mengelola Proses Perumusan Indikator Kinerja Individu'],
                    ['M.70SDM01.031.2', 'Menyusun Kebutuhan Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.032.2', 'Merancang Program Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.040.2', 'Mengelola Program Suksesi'],
                    ['M.70SDM01.043.2', 'Menyusun Peraturan Perusahaan dan/atau Perjanjian Kerja Bersama'],
                    ['M.70SDM01.044.2', 'Membangun Komunikasi Organisasi yang Efektif'],
                ],

                'syarat'    => [
                    'Fotokopi KTP',
                    'Pasfoto berwarna ukuran 3x4 sebanyak 2 lembar',
                    'Fotokopi ijazah pendidikan terakhir (Min. SMA/SMK)',
                    'Surat pengalaman kerja relevan (Min. 1-3 tahun tergantung pendidikan)',
                    'Sertifikat pelatihan berbasis kompetensi (Bila ada)',
                    'Formulir Permohonan FR.APL.01 dan Asesmen Mandiri FR.APL.02',
                ],
            ],
        ];

        if (! isset($data[$id - 1])) {
            abort(404);
        }

        // karena id mulai dari 1, sedangkan index array mulai dari 0
        $data = $data[$id - 1];

        return view('skema-detail', compact('data', 'id'));

    }
}
