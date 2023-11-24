<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => '58f922e3-28e0-4007-869a-b574ad068d51',
                'name' => 'A Suresh',
                'designationCode' => 'user',
                'email' => 'suresh@hayleays.com',
                'password' => Hash::make('user'),
                'location_id' => '1b4170fc-e237-4db5-b032-f54b2d934327',
            ],
            [
                'id' => '799fc69b-5762-4e0e-9dd5-20151679798f',
                'name' => 'Thisaru',
                'designationCode' => 'user',
                'email' => 'thisaru@hayleays.com',
                'password' => Hash::make('user2'),
                'location_id' => '89f9be15-9a60-44e2-b8cc-aeb1a249e780'
            ],
            [
                'id' => '47bc984e-ec57-4c9d-af1d-945e5b76db47',
                'name' => 'Kumarasena',
                'designationCode' => 'manager',
                'email' => 'kumara@hayleays.com',
                'password' => Hash::make('manager'),
                'location_id' => 'd00b153f-81a1-47a0-8717-c7052efc3373'
            ],
            [
                'id' => '4b79ac3d-c856-43b1-bf4e-b25ae85e4a6b',
                'name' => 'Jayantha',
                'designationCode' => 'admin',
                'email' => 'jayantha@hayleays.com',
                'password' => Hash::make('jayantha'),
                'location_id' => '16a0d1f8-6c0b-4013-a385-6f9140efae0b'
            ],
            [
                'id' => '595ccce4-9770-4e7f-bc33-01f5e711a9ee',
                'name' => 'Super User',
                'designationCode' => 'super-admin',
                'email' => 'admin@hayleays.com',
                'password' => Hash::make('admin'),
                'location_id' => '3f378933-dd3f-4151-b879-ecc80fefc934'
            ]
        ];
        
        //
        DB::table('users')->insert($users);
    }
}
