<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Projects;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projects::create([
            'name' => 'CNMH',
            'description' => 'Create Application web pour la gestion des patients de centre CNMH',
        ]);
        Projects::create([
            'name' => 'Arbre de compétence',
            'description' => 'Create Application web pour la gestion des patients de centre CNMH',
        ]);
        Projects::create([
            'name' => 'Portfolio',
            'description' => 'Create Application web pour la gestion des patients de centre CNMH',
        ]);
    }
}
