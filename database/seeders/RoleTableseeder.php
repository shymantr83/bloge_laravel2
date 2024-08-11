<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Factory::create();
        $adminRole=Role::create([
            'name'=>'Admin',
            'display_name'=>'Adminstrator',
            'description'=>'System Adminstrator',
            'allowed_route'=>'admin']);
        $editorRole=Role::create([
            'name'=>'editor',
            'display_name'=>'Supervisor',/*مشرف*/
            'description'=>'System Supervisor',
            'allowed_route'=>'admin']);
        $userRole=Role::create([
            'name'=>'user',
            'display_name'=>' user',
            'description'=>'Normal user',
            'allowed_route'=>null]);
        $Admin=User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@bloggi.test',
            'phone'=>'01117593045',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt(0123),
            'statuse'=>'1',//admin
            'receive_email'=>'1',]);
        $Admin->attachRole($adminRole);
        $editor=User::create([
            'name'=>'editor',
            'username'=>'editor',
            'email'=>'editor@bloggi.test',
            'phone'=>'01117593047',
            'email_verified_at'=>Carbon::now(),
            'password'=>bcrypt(1478),
            'statuse'=>'1',//admin
            'receive_email'=>'1',]);
        $editor->attachRole($editorRole);

        $user1=User::create(['name'=>'shimaa Anter', 'username'=>'shimaa', 'email'=>'user@bloggi.test', 'phone'=>'01117593042', 'email_verified_at'=>Carbon::now(), 'password'=>bcrypt(1478), 'statuse'=>'1',/*user*/]);
        $user1->attachRole($userRole);
        $user2=User::create(['name'=>'sami Anter', 'username'=>'sami', 'email'=>'sami@bloggi.test', 'phone'=>'01117593041', 'email_verified_at'=>Carbon::now(), 'password'=>bcrypt(1478), 'statuse'=>'1',/*user*/]);
        $user2->attachRole($userRole);
        $user3=User::create(['name'=>'Hager Anter', 'username'=>'Hager', 'email'=>'Hager@bloggi.test', 'phone'=>'01117593046', 'email_verified_at'=>Carbon::now(), 'password'=>bcrypt(1478), 'statuse'=>'1',/*user*/]);
        $user3->attachRole($userRole);
        for ($i=0;$i<10;$i++){
            $user=User::create([
                'name'=>$faker->name, 'username'=>$faker->userName, 'email'=>$faker->email, 'phone'=>'0111759'.random_int(1000,9999), 'email_verified_at'=>Carbon::now(), 'password'=>bcrypt(1478), 'statuse'=>'1',/*user*/]);
            $user->attachRole($userRole);
        }

    }
}
