<?php

use Illuminate\Database\Seeder;

class bukuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peminjamen')->insert([[
            'judul_buku' => 'matematika',
            'penulis_buku' => 'elman',
            'penerbit_buku' => 'PT JAYA',
            'tahun_penerbitan' => '2020'
        ],
        [
     'judul_buku' => 'bahasa indo',
'penulis_buku' => 'gilang',
'penerbit_buku' => 'PT surya',
'tahun_penerbitan' => '2019'

    ],
[
    'judul_buku' => 'fisika',
    'penulis_buku' => 'sultan',
    'penerbit_buku' => 'PT PURNAMA',
    'tahun_penerbitan' => '2017'
]]);
    }
}
