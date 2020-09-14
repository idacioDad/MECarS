<?php

use Illuminate\Database\Seeder;
use App\Fabricante;

class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fabricanteRecords = [['fabricante_id'=>1,'fabricante_nome'=>'Toyota'],
        ['fabricante_id'=>2,'fabricante_nome'=>'Nissan'],
        ['fabricante_id'=>3,'fabricante_nome'=>'Hyundai'],
        ['fabricante_id'=>4,'fabricante_nome'=>'Honda'],
        ['fabricante_id'=>5,'fabricante_nome'=>'Lexus']
    ];

    Fabricante::insert($fabricanteRecords);
    }
}
