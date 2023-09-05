<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new \App\User;
        $user->nama="Widya";
        $user->username="adm_widya";
        $user->email="widya@gmail.com";
        $user->password=\Hash::make("widya");
        $user->almtUser="Kebon Jeruk";
        $user->noHp="081258589090";
        $user->save();
        $this->command->info("User admin berhasil disimpan");
    }
}
