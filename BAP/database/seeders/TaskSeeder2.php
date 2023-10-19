<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TaskSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_studis')->insert([
            ['kode_program_studi'=>'PS01',
            'Nama_Program_Studi'=>'Sistem Informasi',
            'deskripsi'=>'mempelajari hubungan komputer dengan manusia'],

            ['kode_program_studi'=>'PS02',
            'Nama_Program_Studi'=>'Law',
            'deskripsi'=>'mempelajari hukum yang ada pada indonesia'],

            ['kode_program_studi'=>'PS03',
            'Nama_Program_Studi'=>'Hospitality',
            'deskripsi'=>'mempelajari tentang perhotelan'],

            ['kode_program_studi'=>'PS04',
            'Nama_Program_Studi'=>'Manajemen',
            'deskripsi'=>'mempelajari tentang manajemen bisnis'],

            ['kode_program_studi'=>'PS05',
            'Nama_Program_Studi'=>'DKV',
            'deskripsi'=>'mempelajari untuk menciptakan karya visual']

        ]);
        DB::table('pembayarans')->insert([
            ['StudentId_Mahasiswa'=>'03081210041',
            'Jumlah_Pembayaran'=>3400000,
            'Tanggal_Pembayaran'=>'12-06-2023',
            'Metode_Bayar'=>'debit'],


            ['StudentId_Mahasiswa'=>'03081210032',
            'Jumlah_Pembayaran'=>2500000,
            'Tanggal_Pembayaran'=>'11-06-2023',
            'Metode_Bayar'=>'cash'],

            ['StudentId_Mahasiswa'=>'03081210053',
            'Jumlah_Pembayaran'=>3800000,
            'Tanggal_Pembayaran'=>'31-05-2023',
            'Metode_Bayar'=>'credit'],

            ['StudentId_Mahasiswa'=>'03081210022',
            'Jumlah_Pembayaran'=>1680000,
            'Tanggal_Pembayaran'=>'17-06-2023',
            'Metode_Bayar'=>'credit'],

            ['StudentId_Mahasiswa'=>'03081210035',
            'Jumlah_Pembayaran'=>2500000,
            'Tanggal_Pembayaran'=>'11-06-2023',
            'Metode_Bayar'=>'cash'],

        ]);
        DB::table('jadwal_kuliahs')->insert([
            ['Kode_Matakuliah'=>'ACC109',
            'Kode_Term'=>'SEM1',
            'Kode_Dosen_Pengampu'=>'ACCD01',
            'Hari'=>'Senin',
            'Jam_Mulai_Perkuliahan'=>'17.30',
            'Jam_Selesai_Perkuliahan'=>'20.10',
            'Ruangan_Kelas'=>'AD109'],

            ['Kode_Matakuliah'=>'WEB101',
            'Kode_Term'=>'SEM1',
            'Kode_Dosen_Pengampu'=>'WEBD01',
            'Hari'=>'Selasa',
            'Jam_Mulai_Perkuliahan'=>'17.30',
            'Jam_Selesai_Perkuliahan'=>'21.00',
            'Ruangan_Kelas'=>'AD101'],

            ['Kode_Matakuliah'=>'AUD101',
            'Kode_Term'=>'SEM1',
            'Kode_Dosen_Pengampu'=>'AUDD01',
            'Hari'=>'Rabu',
            'Jam_Mulai_Perkuliahan'=>'17.30',
            'Jam_Selesai_Perkuliahan'=>'21.00',
            'Ruangan_Kelas'=>'AD101'],

            ['Kode_Matakuliah'=>'IMK109',
            'Kode_Term'=>'SEM1',
            'Kode_Dosen_Pengampu'=>'IMKD01',
            'Hari'=>'Senin',
            'Jam_Mulai_Perkuliahan'=>'17.30',
            'Jam_Selesai_Perkuliahan'=>'20.10',
            'Ruangan_Kelas'=>'AD109'],

            ['Kode_Matakuliah'=>'ETK110',
            'Kode_Term'=>'SEM1',
            'Kode_Dosen_Pengampu'=>'ETKD01',
            'Hari'=>'Senin',
            'Jam_Mulai_Perkuliahan'=>'17.30',
            'Jam_Selesai_Perkuliahan'=>'19.30',
            'Ruangan_Kelas'=>'AD110'],
        ]);

    }
}
