<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class Permision extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission=[
            "role.create",
            "role.edit",
            "role.delete",
            "product.create",
            "product.edit",
            "product.delete",
        ];
        foreach($permission as $key=>$value ){
            Permission::create([
                "name"=>$value
            ]);
        };
    }
}
