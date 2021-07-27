<?php

use Illuminate\Database\Seeder;

class peminjamanseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peminjamen')->insert([[
                'tanggal_pinjam' => '21-02-01',
                'tanggal_kembali' => '21-03-01',
                'nama_peminjam' => 'fatmah',
                'alamat' => 'bumi',
                'buku_id' => 1
                      
            
        ],
    [
        'tanggal_pinjam' => '20-05-01',
        'tanggal_kembali' => '20-5-10',
        'nama_peminjam' => 'eli',
        'alamat' => 'mataram',
        'buku_id' => 2
    ],
[
    'tanggal_pinjam' => '21-07-01',
    'tanggal_kembali' => '21-08-05',
    'nama_peminjam' => 'fina',
    'alamat' => 'waduwani',
    'buku_id' => 1
]]);
    }
}
