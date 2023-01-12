<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::create([
          'name' => 'Administratorius',
          'email' => 'testas@pastas.lt',
          'Role' => 'Administratorius',
          'password' => \Illuminate\Support\Facades\Hash::make('admin123!')
       ]);
        \App\Models\User::create([
            'name' => 'Administratorius2',
            'email' => 'testas2@pastas.lt',
            'Role' => 'Administratorius',
            'password' => \Illuminate\Support\Facades\Hash::make('admin123!')
        ]);
        \App\Models\User::create([
            'name' => 'Vardenis',
            'email' => 'vardenis@pastas.lt',
            'password' => \Illuminate\Support\Facades\Hash::make('Vardenis123!')
        ]);
        \App\Models\Preke::create([
            'Pavadinimas' => 'Preke1',
            'Kaina' =>  169.99,
            'Nuotrauka' => '',
            'Aprasymas' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
            'Modifikuota' => 'Administratorius'
        ]);
        \App\Models\Preke::create([
            'Pavadinimas' => 'Preke2',
            'Kaina' =>  169.99,
            'Nuotrauka' => '',
            'Aprasymas' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
            'Modifikuota' => 'Administratorius'
        ]);
        \App\Models\Preke::create([
            'Pavadinimas' => 'Preke3',
            'Kaina' =>  169.99,
            'Nuotrauka' => '',
            'Aprasymas' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
            'Modifikuota' => 'Administratorius'
        ]);
        \App\Models\Preke::create([
            'Pavadinimas' => 'Preke4',
            'Kaina' =>  169.99,
            'Nuotrauka' => '',
            'Aprasymas' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
            'Modifikuota' => 'Administratorius'
        ]);
    }
}
