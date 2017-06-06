<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;
use App\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        

        $permission1 = Permission::find(1);
        $permission2 = Permission::find(2);
        $permission3 = Permission::find(3);
        $permission4 = Permission::find(4);
        $permission5 = Permission::find(5);
        
        $role1 = Role::find(1);
        $role2 = Role::find(2);
        
        $user1 = User::find(1);
        $user2 = User::find(2);
        
        // $user1->roles()->attach($role1->id);
        $user1->attachRole($role1);
        $user1->attachPermission([$permission1, $permission2]);
        $user1->save();
        
        // $user2->roles()->attach($role2->id);
        $user2->attachRole($role2);
        $user2->attachPermission([$permission1, $permission2,$permission3,$permission4,$permission5]);
        $user2->save();
    }
}

