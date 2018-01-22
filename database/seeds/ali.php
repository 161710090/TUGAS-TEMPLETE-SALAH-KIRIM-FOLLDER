<?php

use Illuminate\Database\Seeder;

class ali extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
              ['Nis'=>'123',
              'Nama'=>'ali',
              'Tempat_lahir'=>'bandung',
              'Tanggal_lahir'=>'2001-06-01',
              'Alamat'=>'bandung',
              'Cita-cita'=>'polisi',
              'Hobi'=>'futsal',
              'Photo'=>'tidak ada']
              ];
                DB::table('siswas')->insert($a);
    }
}
