<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserManagerTableSeeder::class);
    }
}
class UserManagerTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('usermanager')->insert([
			array('name'=>'Nguyen Van A','email'=>'nguyenvana@gmail.com','age'=>'40','phone'=>'0966888111','created_at'=>new DateTime()),
			array('name'=>'Nguyen Van B','email'=>'nguyenvanb@gmail.com','age'=>'41','phone'=>'0966888222','created_at'=>new DateTime()),
			array('name'=>'Nguyen Van C','email'=>'nguyenvanc@gmail.com','age'=>'42','phone'=>'0966888333','created_at'=>new DateTime()),
			array('name'=>'Nguyen Van D','email'=>'nguyenvand@gmail.com','age'=>'43','phone'=>'0966888444','created_at'=>new DateTime()),
			array('name'=>'Nguyen Van E','email'=>'nguyenvane@gmail.com','age'=>'44','phone'=>'0966888555','created_at'=>new DateTime()),
			]);
	}
}
