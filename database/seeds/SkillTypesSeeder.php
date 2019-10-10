<?php

use Illuminate\Database\Seeder;

class SkillTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \DB::table('skill_types')->truncate();
        \DB::table('skill_types')->insert([
            [
                'name' => 'Language Skill',
            ],
            [
                'name' => 'Soft Skill',
            ],
            [
                'name' => 'Hard Skill',
            ]
        ]);
        Schema::enableForeignKeyConstraints();
    }
}