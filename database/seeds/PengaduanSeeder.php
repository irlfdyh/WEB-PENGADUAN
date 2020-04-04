<?php

use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make dummy data
        $data = [
            [
                'id_masyarakat' => 1,
                 'tgl_pengaduan' => '2019-04-' . rand(11, 30),
                'judul' =>'Judul 1',
                'isi_laporan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reprehenderit recusandae ducimus nisi.',
                'foto' => '/images/a.png',
                'status' => 'proses'
            ],
            [
                'id_masyarakat' => 1,
                 'tgl_pengaduan' => '2019-04-' . rand(11, 30),
                'judul' =>'Judul 2',
                'isi_laporan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reprehenderit recusandae ducimus nisi.',
                'foto' => '/images/ab.png',
                'status' => 'selesai'
            ],
            [
                'id_masyarakat' => 1,
                 'tgl_pengaduan' => '2019-04-' . rand(11, 30),
                'judul' =>'Judul 3',
                'isi_laporan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reprehenderit recusandae ducimus nisi.',
                'foto' => '/images/abc.png',
                'status' => 'proses'
            ]
        ];

        //  insert each dummy data to database
        foreach($data as $pengaduan){
            \App\Pengaduan::create($pengaduan);
        }
    }
}
