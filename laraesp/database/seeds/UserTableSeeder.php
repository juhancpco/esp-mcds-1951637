<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use App/User

    public function run()
    {
        $factory->define(User::class, function(Faker $faker){
        	return[
        		'name'	=>$faker->name,
        		'email'	=>$faker->unique()->safeEmail,
        		'password'	=> bcrypt('editor')
        	];
        })





    }
}
