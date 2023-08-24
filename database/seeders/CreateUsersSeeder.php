<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CreateUsersSeeder
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'phone'=>'guyscafe123@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
               'verification'=>'1234',
               'profile_image'=>'123.png',
               'point'=>'99999',
            ],
           
            [
               'name'=>'Kitchen',
               'phone'=>'kitchen@kitchen.com',
               'type'=>2,
               'password'=> bcrypt('123456'),
               'verification'=>'12345',
               'profile_image'=>'123.png',
               'point'=>'99999',
            ],
            [
               'name'=>'User',
               'phone'=>'user@user.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
               'verification'=>'123456',
               'profile_image'=>'123.png',
               'point'=>'99999',
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}