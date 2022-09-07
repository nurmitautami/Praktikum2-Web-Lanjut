<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051058',
                'nama'    => 'Nur Mita Utami',
                'alamat'    => 'Lampung',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051056',
                'nama'    => 'Wina Fadhilah',
                'alamat'    => 'Bandar Lampung',
                'created_at'    => Time::now(),
            ],
            [
                'npm' => '2017051059',
                'nama'    => 'Putri Cantika',
                'alamat'    => 'Lampung Selatan',
                'created_at'    => Time::now(),
            ],
        ];

        // Simple Queries
        foreach($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }

    }
}
