<?php

use Illuminate\Database\Seeder;

class DigitalProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('digital_product_types')->insert([
                [
                    'name' => 'SVGs',
                    'notes' => '(Scalable Vector Graphics) Upload a .zip archive, containing at least one .svg file. You may also include .pdf or .txt files with instructions or helpful notes.',
                    'active' => true
                ],
                [
                    'name' => 'Fonts',
                    'notes' => '(.ttf or .otf) Upload a .zip archive, containing at least one .ttf or .otf file. You may also include .pdf or .txt files with instructions or helpful notes.',
                    'active' => false
                ],
                [
                    'name' => 'Photography',
                    'notes' => '(.jpg or .jpeg) Upload a .zip archive, containing at least one .jpg or .jpeg file. You may also include .pdf or .txt files with instructions or helpful notes.',
                    'active' => false
                ]
        ]
        );
    }
}
