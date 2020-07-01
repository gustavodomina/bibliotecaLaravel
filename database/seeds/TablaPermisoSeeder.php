<?php

use Illuminate\Database\Seeder;
Use App\Models\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class)->times(10)->create();
    }
}
