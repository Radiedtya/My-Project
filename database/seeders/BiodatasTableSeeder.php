<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            // 1
            [
                'nama_lengkap' => 'Ahmad Fadilah',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2008-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'TKI',
                'telepon'      => '0812345678910',
                'email'        => 'ahmad@gmail.com'
            ],

            // 2
            [
                'nama_lengkap' => 'Davin Gahisan',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2009-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Komp Sinang Palay',
                'telepon'      => '0812345678910',
                'email'        => 'davin@gmail.com'
            ],

            // 3
            [
                'nama_lengkap' => 'Fakhri Ibnu Nabil',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2009-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Rancamanyar',
                'telepon'      => '0812345678910',
                'email'        => 'fakhri@gmail.com'
            ],

            // 4
            [
                'nama_lengkap' => 'Ilman Abidullah',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2008-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Komp BMI',
                'telepon'      => '0812345678910',
                'email'        => 'ilman@gmail.com'
            ],

            // 5
            [
                'nama_lengkap' => 'Muhammad Jihad Putra Drajat',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2009-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'TKI',
                'telepon'      => '0812345678910',
                'email'        => 'jihad@gmail.com'
            ],

            // 6
            [
                'nama_lengkap' => 'Muhammad Radiedtya Pratama',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2009-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Komp BMI',
                'telepon'      => '0812345678910',
                'email'        => 'radit@gmail.com'
            ],

            // 7
            [
                'nama_lengkap' => 'Raka Alfarizqi Zahir',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2008-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Cangkuang',
                'telepon'      => '0812345678910',
                'email'        => 'raka@gmail.com'
            ],

            // 8
            [
                'nama_lengkap' => 'Rehan Ramadhan',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2008-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Bahuan',
                'telepon'      => '0812345678910',
                'email'        => 'rehan@gmail.com'
            ],

            // 9
            [
                'nama_lengkap' => 'Reihan Azka Vahlepy',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2008-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Jati Mekar',
                'telepon'      => '0812345678910',
                'email'        => 'reyhan@gmail.com'
            ],

            // 10
            [
                'nama_lengkap' => 'Teguh Firmansyah',
                'jenis_kelamin'=> 'Laki-laki',
                'tanggal_lahir'=> '2008-01-01',
                'tempat_lahir' => 'Bandung',
                'agama'        => 'Islam',
                'alamat'       => 'Rancamanyar',
                'telepon'      => '0812345678910',
                'email'        => 'teguh@gmail.com'
            ]
        ]);
    }
}
