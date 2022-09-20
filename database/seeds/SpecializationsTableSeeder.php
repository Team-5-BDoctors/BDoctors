<?php

use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = ['Neurologia', 'Cardiologia', 'Pediatria', 'Ginecologia', 'Chirurgia', 'Allergologia', 'Urologia', 'Dermatologia', 'Endocrinologia', 'Psichiatria',];

        foreach ($specializations as $specialization) {
            $newSpecialization = new App\Specialization();
            $newSpecialization->name = $specialization;
            $newSpecialization->save();
        }
    }
}
