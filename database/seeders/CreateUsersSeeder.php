<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            ],
           
            [
               'name'=>'Kitchen',
               'phone'=>'kitchen@kitchen.com',
               'type'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'phone'=>'user@user.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}