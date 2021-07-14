<?php

use Illuminate\Database\Seeder;
use App\User; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['name' => 'kerotan','email' => 'kero@abc.com','password' => '12345',];
		$user = new User;
		$user->fill($data)->save();

		$data = ['name' => 'Goemon','email' => 'goemon@goe.com','password' => '12345',];
		$user = new User;
		$user->fill($data)->save();

		$data = ['name' => 'Monkey','email' => 'monk@saru.com','password' => '12345',];
		$user = new User;
		$user->fill($data)->save();
    }
}
