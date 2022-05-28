<?php

namespace Database\Seeders;
use App\Permission;
use App\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateRolesKadrAndFin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $adminUser = User::create([
            'name'     => 'Human Resources Department',
            'email'    => 'human_resources_department@site.com',
            'password' => bcrypt('password'),
        ]);

        $testUser = User::create([
            'name'     => 'Financial Department',
            'email'    => 'financial_department@site.com',
            'password' => bcrypt('password'),
        ]);
        
        $adminRole = Role::create([
            'name'  => 'hum-res-department',
            'display_name' => 'Human Resources Department'
        ]);

        $managerRole = Role::create([
            'name'  => 'fin-department',
            'display_name' => 'Financial Department'
        ]);
        $HomeRole = Role::create([
            'name'  => 'home_pages',
            'display_name' => 'home_pages'
        ]);

        $FormRole = Role::create([
            'name'  => 'forms_callbacks',
            'display_name' => 'forms_callbacks'
        ]);

        $OptionRole = Role::create([
            'name'  => 'options',
            'display_name' => 'options'
        ]);

        $ObjectRole = Role::create([
            'name'  => 'objects',
            'display_name' => 'objects'
        ]);

        $ConactRole = Role::create([
            'name'  => 'contacts',
            'display_name' => 'contacts'
        ]);

        
        $TransRole = Role::create([
            'name'  => 'translations',
            'display_name' => 'translations'
        ]);

                
        $AboutRole = Role::create([
            'name'  => 'abouts',
            'display_name' => 'abouts'
        ]);

        $TasksRole = Role::create([
            'name'  => 'tasks',
            'display_name' => 'tasks'
        ]);

        $StructureRole = Role::create([
            'name'  => 'structures',
            'display_name' => 'structures'
        ]);

        $DepartRole = Role::create([
            'name'  => 'departaments',
            'display_name' => 'departaments'
        ]);

        $LicenseRole = Role::create([
            'name'  => 'licenses',
            'display_name' => 'licenses'
        ]);

        $VacanRole = Role::create([
            'name'  => 'vacancies',
            'display_name' => 'vacancies'
        ]);

        $DocRole = Role::create([
            'name'  => 'documents',
            'display_name' => 'documents'
        ]);

        $NewsRole = Role::create([
            'name'  => 'news',
            'display_name' => 'news'
        ]);

        $VidoeRole = Role::create([
            'name'  => 'videos',
            'display_name' => 'videos'
        ]);

        $PhotosRole = Role::create([
            'name'  => 'photos',
            'display_name' => 'photos'
        ]);

        
        $ServiceRole = Role::create([
            'name'  => 'services',
            'display_name' => 'services'
        ]);




        $adminUser->roles()->attach($HomeRole);
        $adminUser->roles()->attach($FormRole);
        $adminUser->roles()->attach($OptionRole);
        $adminUser->roles()->attach($ObjectRole);
        $adminUser->roles()->attach($ConactRole);
        $adminUser->roles()->attach($TransRole);
        $adminUser->roles()->attach($AboutRole);

        $adminUser->roles()->attach($TasksRole);
        $adminUser->roles()->attach($StructureRole);
        $adminUser->roles()->attach($DepartRole);
        $adminUser->roles()->attach($LicenseRole);
        $adminUser->roles()->attach($VacanRole);
        $adminUser->roles()->attach($DocRole);
        $adminUser->roles()->attach($NewsRole);
        $adminUser->roles()->attach($VidoeRole);
        $adminUser->roles()->attach($PhotosRole);
        $adminUser->roles()->attach($ServiceRole);
        $adminUser->roles()->attach($adminRole);
        
        $testUser->roles()->attach($managerRole);
    }
}
