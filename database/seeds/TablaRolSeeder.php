<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'adminsitrador',
            'editor',
            'supervisor'
        ];


        foreach ($rols as $key => $value) {
            DB::table('rol')->insert([
                'nombre'=>$value,
                'created_at'=> Carbon::now()->format('y-m-d H:s:s')
            ]);
        }
    }
}
