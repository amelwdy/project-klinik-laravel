<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
            'nama'=> 'Hana',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            ]);
        $admin->assignRole('admin');

        $dokter=User::create([
            'nama'=> 'dr.Wahyudin',
            'username'=>'dokter',
            'email'=>'dokter@gmail.com',
            'password'=>bcrypt('dokter'),
            ]);
        $dokter->assignRole('dokter');
            
        $apoteker=User::create([
            'nama'=> 'Sofia',
            'username'=>'apoteker',
            'email'=>'apoteker@gmail.com',
            'password'=>bcrypt('apoteker'),
            ]);
        $apoteker->assignRole('apoteker');
    }
}