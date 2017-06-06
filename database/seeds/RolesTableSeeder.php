<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	[
        		'name' => 'admin',
        		'display_name' => 'Admin',
        		'description' => 'The Admin has full permission'
        	],
        	[
        		'name' => 'author',
        		'display_name' => 'Author',
        		'description' => 'The Author can create post, ...'
        	],
        	[
        		'name' => 'editor',
        		'display_name' => 'Editor',
        		'description' => 'The Editor can modify any user post, ...'
        	]
        ];

        foreach ($roles as $key => $value) {
        	Role::create($value);
        }
    }
}
