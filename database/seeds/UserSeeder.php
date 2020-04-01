<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Forever Doe',
            'username' => 'rakyat',
            'password' => bcrypt('123qwe123'),
            'level' => 'masyarakat',
        ]);

        Masyarakat::create([
            'nik' => '1234567890098765',
            'nama' => $user->name,
            'username' => $user->name,
            'password' => bcrypt($user->password),
            'telp' => '0812361823',
            'user_id' => $user->id,
        ]);
    }
}
