<?php

namespace Database\Seeders;

use App\Models\JobOffer;
use Illuminate\Database\Seeder;

class JobOfferSeeder extends Seeder
{
    public function run(): void
    {
        // Créer 20 offres d'emploi avec des données réalistes
        JobOffer::factory(20)->create();

        // Créer quelques offres spécifiques
        JobOffer::create([
            'title' => 'Lead Developer Laravel',
            'location' => 'Paris',
            'category' => 'Informatique',
            'contract_type' => 'CDI',
            'work_type' => 'Remote', // Correction ici
            'salary' => 6500,
            'is_salary_negotiable' => true,
            'description' => "2aCall recherche un Lead Developer Laravel expérimenté pour diriger notre équipe technique. Vous serez responsable de l'architecture et du développement de nos applications web innovantes.",
            'requirements' => "Master en informatique\n5+ ans d'expérience Laravel\nExpérience en management\nMaîtrise des API REST\nDevOps (Docker, CI/CD)",
            'benefits' => "Salaire attractif\nStock-options\nTélétravail flexible\nFormation continue\nÉquipement premium",
            'is_active' => true,
        ]);

        JobOffer::create([
            'title' => 'Stagiaire Développeur Web',
            'location' => 'Remote',
            'category' => 'Informatique',
            'contract_type' => 'Stage',
            'work_type' => 'Remote',
            'salary' => 800,
            'is_salary_negotiable' => false,
            'description' => "Stage de 6 mois pour apprendre le développement web moderne. Accompagnement par des seniors, projets concrets et formation aux bonnes pratiques.",
            'requirements' => "Étudiant en informatique\nConnaissances HTML/CSS/JS\nMotivation et curiosité\nCapacité d'apprentissage\nTravail en équipe",
            'benefits' => "Gratification stage\nFormation intensive\nMentoring senior\nPossibilité d'embauche\nÉquipe bienveillante",
            'is_active' => true,
        ]);
    }
}