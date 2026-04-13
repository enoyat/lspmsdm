<?php
namespace App\Http\Controllers;

use App\Models\Dokumen;
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
    public function datasertifikat()
    {
        $offline = Dokumen::kategori('offline')->latest()->paginate(12);
        $online  = Dokumen::kategori('online')->latest()->paginate(12);

        return view('sertifikat', compact('offline', 'online'));
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
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
            ],
            [
                'id'        => 2,
                'judul'     => 'Supervisor SDM',
                'kode'      => 'MSDM-002',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
            ],
            [
                'id'        => 3,
                'judul'     => 'Supervisor Rekrutmen & Seleksi Sumber Daya Manusia',
                'kode'      => 'MSDM-003',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
            [
                'id'        => 4,
                'judul'     => 'Kepala Bagian SDM',
                'kode'      => 'MSDM-004',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
            [
                'id'        => 5,
                'judul'     => 'Manajer SDM',
                'kode'      => 'MSDM-005',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
        ];

        return view('skema', compact('data'));
        //
    }
    public function skemasertifikasionline()
    {
        // dummy data (nanti bisa dari database)
        $data = [
            [
                'id'        => 1,
                'judul'     => 'Staff SDM',
                'kode'      => 'MSDM-001',
                'level'     => 'Level 3',
                'biaya'     => 'Rp 750.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
            ],
            [
                'id'        => 2,
                'judul'     => 'Supervisor SDM',
                'kode'      => 'MSDM-002',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
            ],
            [
                'id'        => 3,
                'judul'     => 'Supervisor Rekrutmen & Seleksi Sumber Daya Manusia',
                'kode'      => 'MSDM-003',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
            [
                'id'        => 4,
                'judul'     => 'Kepala Bagian SDM',
                'kode'      => 'MSDM-004',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
            [
                'id'        => 5,
                'judul'     => 'Manajer SDM',
                'kode'      => 'MSDM-005',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
            ],
        ];

        return view('skema-online', compact('data'));
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
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun kebutuhan tenaga kerja'],
                    ['M.70SDM01.057.2', 'Melaksanakan rekrutmen dan seleksi'],
                    ['M.70SDM01.058.2', 'Mengelola kinerja karyawan'],
                    ['M.70SDM01.059.2', 'Mengembangkan kompetensi SDM'],
                ],
                'syarat'    => [
                    'Fotocopy KTP yang masih berlaku',
                    'Pas Foto terbaru 3x4 sebanyak 2 lembar',
                    'Copy ijazah setara SLTA dan copy surat keterangan pengalaman
kerja minimal 1 (satu) tahun dibidang Pengelolaan Sumber Daya
Manusia atau copy Sertifikat Pemagangan di bidang Pengelolaan
Sumber Daya Manusia atau copy Sertifikat Pelatihan Berbasis
Kompetensi pada leval jabatan Staf Sumber Daya Manusia dari
Lembaga Pelatihan yang terregistrasi/terakreditasi, atau;',
                    'Copy ijazah D1 Umum dan copy Sertifikat Pemagangan dibidang
Pengelolaan Sumber Daya Manusia, atau copy Sertifikat Pelatihan
Berbasis Kompetensi pada level jabatan Staf Sumber Daya
Manusia dari Lembaga Pelatihan yang terregistrasi/terakreditasi;
atau;',
                    'Copy surat keterangan pengalaman kerja minimal 3 (tiga) tahun
dibidang Pengelolaan Sumber Daya Manusia dari lembaga
berbadan hukum; atau.',
                    'Copy surat keterangan sedang menduduki posisi jabatan sebagai
Staf Sumber Daya Manusia minimal selama 6 (enam) bulan dari
perusahaan tempat bekerja.',
                ],
            ],
            [
                'id'        => 2,
                'judul'     => 'Supervisor SDM',
                'kode'      => 'MSDM-002',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Supervisor-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.023.2', 'Menyusun Sistem Remunerasi'],
                    ['M.70SDM01.031.2', 'Menyusun Kebutuhan Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.042.2', 'Membuat Kesepakatan Kerja'],
                ],
                'syarat'    => [
                    'Photo Copy KTP;',
                    'Pas photo berwarna 3x4 cm (2 lembar);',
                    'Copy ijazah Pendidikan setara D2 (Semester 4) Umum dan copy
surat pengalaman kerja minimal 2 (dua) tahun dibidang
Pengelolaan Sumber Daya Manusia; atau',
                    'Copy pendidikan setara D2 (Semester 4) Umum dan copy Sertifikat
Pemagangan dibidang Sumber Daya Manusia atau copy Sertifikat Pelatihan Berbasis Kompetensi pada level Jabatan Supervisor
Sumber Daya Manusia dari Lembaga Pelatihan yang
terregistrasi/terakreditasi; atau',
                    'Copy surat pengalaman kerja minimal 2 (dua) tahun sebagai
Supervisor Sumber Daya Manusia; atau',
                    'Surat keterangan kerja dari perusahaan sebagai Supervisor
Sumber Daya Manusia dengan masa kerja minimal selama 6
(enam) bulan; atau',
                    'Copy surat pengalaman kerja 1 tahun sebagai Supervisor Sumber
Daya Manusia dan copy Sertifikat Kompetensi pada level
Supervisor Sumber Daya Manusia.;',

                ],
            ],
            [
                'id'        => 3,
                'judul'     => 'Supervisor Rekrutmen & Seleksi Sumber Daya Manusia',
                'kode'      => 'MSDM-003',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Supervisor-Rekrutmen-Seleksi SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.017.2', 'Melakukan Proses Rekrutmen'],
                    ['M.70SDM01.018.2', 'Melakukan Proses Seleksi'],
                    ['M.70SDM01.020.2', 'Melakukan Penawaran Kerja Kepada Calon Pekerja'],

                ],
                'syarat'    => [
                    'Photo Copy KTP;',
                    'Pas photo berwarna 3x4 cm (2 lembar);',
                    'Copy ijazah pendidikan setara D2 (Semester 4) Umum dan copy
surat pengalaman kerja minimal 2 (dua) tahun dibidang Pengelolaan Sumber Daya Manusia; atau ',
                    'Copy ijazah pendidikan setara D2 (Semester 4) Umum dan copy
Sertifikat Pemagangan dibidang Sumber Daya Manusia atau copy
Sertifikat Pelatihan Berbasis Kompetensi pada level Jabatan
Supervisor Rekrutmen dan Seleksi SDM dari Lembaga Pelatihan
yang terregistrasi/terakreditasi; atau',
                    'Copy surat pengalaman kerja minimal 2 (dua) tahun sebagai
Supervisor Rekrutmen dan Seleksi SDM; atau',
                    'Surat keterangan kerja dari perusahaan sebagai Supervisor
Rekrutmen dan Seleksi SDM dengan masa kerja minimal selama 6
(enam) bulan; atau',
                    'Copy surat pengalaman kerja 1 tahun sebagai Supervisor
Rekrutmen dan Seleksi SDM dan copy Sertifikat Kompetensi pada
level Supervisor Rekrutmen dan Seleksi SDM.;',
                ],
            ],
            [
                'id'        => 4,
                'judul'     => 'Kepala Bagian SDM',
                'kode'      => 'MSDM-004',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Kapala-Bagian-SDM.zip',
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
                    'Fotocopy KTP yang masih berlaku',
                    'Pas Foto terbaru 3x4 sebanyak 2 lembar',
                    'Copy ijazah setara D3 Manajemen Peminatan Sumber Daya
Manusia atau yang setara; atau;',
                    'Copy ijazah setara D3 umum dan copy Sertifikat Pemagangan di
bidang Sumber Daya Manusia atau copy Sertifikat Pelatihan
Berbasis Kompetensi pada level Jabatan Kepala Bagian/Analis
Senior Sumber Daya Manusia dari Lembaga Pelatihan yang
terregistrasi/terakreditasi; atau;',
                    'Copy surat keterangan pengalaman kerja minimal 2 (dua) tahun
sebagai Kepala Bagian/Analis Senior Sumber Daya Manusia dan
copy Sertifikat Pelatihan Berbasis Kompetensi pada leval jabatan
Kepala Bagian/Analis Senior Sumber Daya Manusia dari Lembaga
Pelatihan yang terregistrasi/terkareditasi; atau',
                    'Copy surat keterangan sedang menduduki jabatan sebagai Kepala
Bagian/Analis Senior Sumber Daya Manusia minimal selama 6
(enam) bulan dari perusahaan tempat bekerja, atau;',
                    'Copy surat keterangan pengalaman minimal 1 (satu) tahun sebagai
Kepala Bagian/Analis Senior Sumber Daya Manusia dan Copy
Sertifikat Kompetensi pada level jabatan Kepala Bagian/Analis
Senior Sumber Daya Manusia dari Lembaga Sertifikasi Profesi
yang terakreditasi.',

                ],
            ],
            [
                'id'        => 5,
                'judul'     => 'Manajer SDM',
                'kode'      => 'MSDM-005',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Manajer-SDM.zip',
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
                    'Fotocopy KTP yang masih berlaku',
                    'Pas Foto terbaru 3x4 sebanyak 2 lembar',
                    'Copy ijazah setara S1 Manajemen Peminatan Sumber Daya
Manusia atau yang setara; atau;',
                    'Copy ijazah setara D3 umum dan copy surat keterangan memiliki
pengalaman kerja minimal 1 (satu) tahun di bidang Sumber Daya
Manusia atau copy Sertifikat Pemagangan di bidang Sumber Daya
Manusia atau copy Sertifikat Pelatihan Berbasis Kompetensi pada
level Jabatan Manajer Sumber Daya Manusia dari Lembaga
Pelatihan yang terregistrasi/terakreditasi; atau;',
                    'Copy surat keterangan pengalaman kerja minimal 3 (tiga) tahun
sebagai Manajer Sumber Daya Manusia dan copy Sertifikat
Pelatihan Berbasis Kompetensi pada level jabatan Manajer
Sumber Daya Manusia dari Lembaga Pelatihan yang
terregistrasi/terkareditasi; atau',
                    'Copy surat keterangan sedang menduduki jabatan sebagai
manajer Sumber Daya Manusia minimal selama 6 (enam) bulan
dari perusahaan tempat bekerja, atau;',
                    'Copy surat keterangan memiliki pengalaman minimal 1 (satu)
tahun sebagai Manajer Sumber Daya Manusia dan Copy Sertifikat
Kompetensi pada level jabatan Manajer Sumber Daya Manusia
dari Lembaga Sertifikasi Profesi yang terakreditasi.',
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
    public function skemadetailonline($id)
    {
        // dummy data (nanti bisa dari database)

        $data = [
            [
                'id'        => 1,
                'judul'     => 'Staff SDM',
                'kode'      => 'MSDM-001',
                'level'     => 'Level 3',
                'biaya'     => 'Rp 750.000',
                'dokumen'   => 'Skema-Staf-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun kebutuhan tenaga kerja'],
                    ['M.70SDM01.057.2', 'Melaksanakan rekrutmen dan seleksi'],
                    ['M.70SDM01.058.2', 'Mengelola kinerja karyawan'],
                    ['M.70SDM01.059.2', 'Mengembangkan kompetensi SDM'],
                ],
                'syarat'    => [
                    'Fotocopy KTP yang masih berlaku',
                    'Pas Foto terbaru 3x4 sebanyak 2 lembar',
                    'Copy ijazah setara SLTA dan copy surat keterangan pengalaman
kerja minimal 1 (satu) tahun dibidang Pengelolaan Sumber Daya
Manusia atau copy Sertifikat Pemagangan di bidang Pengelolaan
Sumber Daya Manusia atau copy Sertifikat Pelatihan Berbasis
Kompetensi pada leval jabatan Staf Sumber Daya Manusia dari
Lembaga Pelatihan yang terregistrasi/terakreditasi, atau;',
                    'Copy ijazah D1 Umum dan copy Sertifikat Pemagangan dibidang
Pengelolaan Sumber Daya Manusia, atau copy Sertifikat Pelatihan
Berbasis Kompetensi pada level jabatan Staf Sumber Daya
Manusia dari Lembaga Pelatihan yang terregistrasi/terakreditasi;
atau;',
                    'Copy surat keterangan pengalaman kerja minimal 3 (tiga) tahun
dibidang Pengelolaan Sumber Daya Manusia dari lembaga
berbadan hukum; atau.',
                    'Copy surat keterangan sedang menduduki posisi jabatan sebagai
Staf Sumber Daya Manusia minimal selama 6 (enam) bulan dari
perusahaan tempat bekerja.',
                ],
            ],
            [
                'id'        => 2,
                'judul'     => 'Supervisor SDM',
                'kode'      => 'MSDM-002',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Supervisor-SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Human Resource Supervisor yang bertanggung jawab dalam pengelolaan SDM.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.023.2', 'Menyusun Sistem Remunerasi'],
                    ['M.70SDM01.031.2', 'Menyusun Kebutuhan Pembelajaran dan Pengembangan'],
                    ['M.70SDM01.042.2', 'Membuat Kesepakatan Kerja'],
                ],
                'syarat'    => [
                    'Photo Copy KTP;',
                    'Pas photo berwarna 3x4 cm (2 lembar);',
                    'Copy ijazah Pendidikan setara D2 (Semester 4) Umum dan copy
surat pengalaman kerja minimal 2 (dua) tahun dibidang
Pengelolaan Sumber Daya Manusia; atau',
                    'Copy pendidikan setara D2 (Semester 4) Umum dan copy Sertifikat
Pemagangan dibidang Sumber Daya Manusia atau copy Sertifikat Pelatihan Berbasis Kompetensi pada level Jabatan Supervisor
Sumber Daya Manusia dari Lembaga Pelatihan yang
terregistrasi/terakreditasi; atau',
                    'Copy surat pengalaman kerja minimal 2 (dua) tahun sebagai
Supervisor Sumber Daya Manusia; atau',
                    'Surat keterangan kerja dari perusahaan sebagai Supervisor
Sumber Daya Manusia dengan masa kerja minimal selama 6
(enam) bulan; atau',
                    'Copy surat pengalaman kerja 1 tahun sebagai Supervisor Sumber
Daya Manusia dan copy Sertifikat Kompetensi pada level
Supervisor Sumber Daya Manusia.;',

                ],
            ],
            [
                'id'        => 3,
                'judul'     => 'Supervisor Rekrutmen & Seleksi Sumber Daya Manusia',
                'kode'      => 'MSDM-003',
                'level'     => 'Level 4',
                'biaya'     => 'Rp 1.500.000',
                'dokumen'   => 'Skema-Supervisor-Rekrutmen-Seleksi SDM.zip',
                'deskripsi' => 'Skema sertifikasi ini ditujukan untuk tenaga kerja di bidang Manajer SDM yang bertanggung jawab dalam perencanaan strategis dan pengelolaan SDM secara keseluruhan.',
                'unit'      => [
                    ['M.70SDM01.010.2', 'Menyusun Uraian Jabatan'],
                    ['M.70SDM01.013.2', 'Menyusun Standar Operasional Prosedur (SOP) MSDM'],
                    ['M.70SDM01.017.2', 'Melakukan Proses Rekrutmen'],
                    ['M.70SDM01.018.2', 'Melakukan Proses Seleksi'],
                    ['M.70SDM01.020.2', 'Melakukan Penawaran Kerja Kepada Calon Pekerja'],

                ],
                'syarat'    => [
                    'Photo Copy KTP;',
                    'Pas photo berwarna 3x4 cm (2 lembar);',
                    'Copy ijazah pendidikan setara D2 (Semester 4) Umum dan copy
surat pengalaman kerja minimal 2 (dua) tahun dibidang Pengelolaan Sumber Daya Manusia; atau ',
                    'Copy ijazah pendidikan setara D2 (Semester 4) Umum dan copy
Sertifikat Pemagangan dibidang Sumber Daya Manusia atau copy
Sertifikat Pelatihan Berbasis Kompetensi pada level Jabatan
Supervisor Rekrutmen dan Seleksi SDM dari Lembaga Pelatihan
yang terregistrasi/terakreditasi; atau',
                    'Copy surat pengalaman kerja minimal 2 (dua) tahun sebagai
Supervisor Rekrutmen dan Seleksi SDM; atau',
                    'Surat keterangan kerja dari perusahaan sebagai Supervisor
Rekrutmen dan Seleksi SDM dengan masa kerja minimal selama 6
(enam) bulan; atau',
                    'Copy surat pengalaman kerja 1 tahun sebagai Supervisor
Rekrutmen dan Seleksi SDM dan copy Sertifikat Kompetensi pada
level Supervisor Rekrutmen dan Seleksi SDM.;',
                ],
            ],
            [
                'id'        => 4,
                'judul'     => 'Kepala Bagian SDM',
                'kode'      => 'MSDM-004',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Kapala-Bagian-SDM.zip',
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
                    'Fotocopy KTP yang masih berlaku',
                    'Pas Foto terbaru 3x4 sebanyak 2 lembar',
                    'Copy ijazah setara D3 Manajemen Peminatan Sumber Daya
Manusia atau yang setara; atau;',
                    'Copy ijazah setara D3 umum dan copy Sertifikat Pemagangan di
bidang Sumber Daya Manusia atau copy Sertifikat Pelatihan
Berbasis Kompetensi pada level Jabatan Kepala Bagian/Analis
Senior Sumber Daya Manusia dari Lembaga Pelatihan yang
terregistrasi/terakreditasi; atau;',
                    'Copy surat keterangan pengalaman kerja minimal 2 (dua) tahun
sebagai Kepala Bagian/Analis Senior Sumber Daya Manusia dan
copy Sertifikat Pelatihan Berbasis Kompetensi pada leval jabatan
Kepala Bagian/Analis Senior Sumber Daya Manusia dari Lembaga
Pelatihan yang terregistrasi/terkareditasi; atau',
                    'Copy surat keterangan sedang menduduki jabatan sebagai Kepala
Bagian/Analis Senior Sumber Daya Manusia minimal selama 6
(enam) bulan dari perusahaan tempat bekerja, atau;',
                    'Copy surat keterangan pengalaman minimal 1 (satu) tahun sebagai
Kepala Bagian/Analis Senior Sumber Daya Manusia dan Copy
Sertifikat Kompetensi pada level jabatan Kepala Bagian/Analis
Senior Sumber Daya Manusia dari Lembaga Sertifikasi Profesi
yang terakreditasi.',

                ],
            ],
            [
                'id'        => 5,
                'judul'     => 'Manajer SDM',
                'kode'      => 'MSDM-005',
                'level'     => 'Level 5',
                'biaya'     => 'Rp 3.000.000',
                'dokumen'   => 'Manajer-SDM.zip',
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
                    'Fotocopy KTP yang masih berlaku',
                    'Pas Foto terbaru 3x4 sebanyak 2 lembar',
                    'Copy ijazah setara S1 Manajemen Peminatan Sumber Daya
Manusia atau yang setara; atau;',
                    'Copy ijazah setara D3 umum dan copy surat keterangan memiliki
pengalaman kerja minimal 1 (satu) tahun di bidang Sumber Daya
Manusia atau copy Sertifikat Pemagangan di bidang Sumber Daya
Manusia atau copy Sertifikat Pelatihan Berbasis Kompetensi pada
level Jabatan Manajer Sumber Daya Manusia dari Lembaga
Pelatihan yang terregistrasi/terakreditasi; atau;',
                    'Copy surat keterangan pengalaman kerja minimal 3 (tiga) tahun
sebagai Manajer Sumber Daya Manusia dan copy Sertifikat
Pelatihan Berbasis Kompetensi pada level jabatan Manajer
Sumber Daya Manusia dari Lembaga Pelatihan yang
terregistrasi/terkareditasi; atau',
                    'Copy surat keterangan sedang menduduki jabatan sebagai
manajer Sumber Daya Manusia minimal selama 6 (enam) bulan
dari perusahaan tempat bekerja, atau;',
                    'Copy surat keterangan memiliki pengalaman minimal 1 (satu)
tahun sebagai Manajer Sumber Daya Manusia dan Copy Sertifikat
Kompetensi pada level jabatan Manajer Sumber Daya Manusia
dari Lembaga Sertifikasi Profesi yang terakreditasi.',
                ],
            ],
        ];

        if (! isset($data[$id - 1])) {
            abort(404);
        }

        // karena id mulai dari 1, sedangkan index array mulai dari 0
        $data = $data[$id - 1];

        return view('skema-detail-online', compact('data', 'id'));

    }
}
