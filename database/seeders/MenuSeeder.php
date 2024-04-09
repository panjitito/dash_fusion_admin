<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menus;
use Carbon\Carbon;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menus::create([
            'title'     => 'Dashboard',
            'parent_id' => null,
            'route_name'=> 'dashboard',
            'order'     => 1,
            'icon'      => '<span class="menu-icon"><i class="ki-duotone ki-home-2 fs-2"><span class="path1"></span><span class="path2"></span></i></span>',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        //Admin Menu
        $admin = Menus::create([
            'title'     => 'Admin',
            'parent_id' => null,
            'route_name'=> null,
            'order'     => 2,
            'icon'      => '<span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span>',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        //User Management menu under Admin
        $userManagement = Menus::create([
            'title'     => 'User Management',
            'parent_id' => $admin->id,
            'route_name'=> null,
            'order'     => 1,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        //Users menu under User Management
        Menus::create([
            'title'     => 'Users',
            'parent_id' => $userManagement->id,
            'route_name'=> 'admin.user.list',
            'order'     => 1,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        Menus::create([
            'title'     => 'Roles',
            'parent_id' => $userManagement->id,
            'route_name'=> null,
            'order'     => 2,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        Menus::create([
            'title'     => 'Permissions',
            'parent_id' => $userManagement->id,
            'route_name'=> 'admin.user.permission',
            'order'     => 3,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
