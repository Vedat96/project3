<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'admin', 
            'email' => 'admin@test.com',
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'Admin']);

	    $permissions = Permission::pluck('id','id')->all();

	    $role->syncPermissions($permissions);

	    $user->assignRole($role->name]);

  //   	foreach(Spatie\Permission\Models\Role::all() as $role) {
		// 	$users = factory(User::class, 50)->create();
		//     foreach($users as $user){
		//     	$user->assignRole($role);
		//     }
		// }
    }
}
