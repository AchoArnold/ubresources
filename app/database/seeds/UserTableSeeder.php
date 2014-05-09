<?php

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->insert(array(
			array('username' => 'arnold', 'password' => Hash::make('Kardashian'), 'recovery_email' => 'arnold@archlinux.info',  'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05')
			));
	}
}