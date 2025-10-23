<?php 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'Ahmad Fadilah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-01-01',
                'kelas' => 'XI RPL 1',
            ],

            [
                'nama_lengkap' => 'Davin Gahisan Mustafiq',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-01-01',
                'kelas' => 'XI RPL 1',
            ],

            [
                'nama_lengkap' => 'Fakhri Ibnu Nabil',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-01-05',
                'kelas' => 'XI RPL 1',
            ],

            [
                'nama_lengkap' => 'Ilman Abidullah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-05-20',
                'kelas' => 'XI RPL 1',
            ],

            [
                'nama_lengkap' => 'Muhammad Radiedtya Pratama',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-02-20',
                'kelas' => 'XI RPL 1',
            ],
        ]);
    }
}
