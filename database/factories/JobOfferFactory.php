<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobOfferFactory extends Factory
{
    public function definition(): array
    {
        $titles = [
            'Développeur Full Stack Senior',
            'Chef de Projet Digital',
            'Designer UI/UX',
            'Développeur Laravel',
            'Data Scientist',
            'Product Manager',
            'Développeur React Native',
            'Administrateur Système',
            'Commercial B2B',
            'Marketing Manager',
            'Développeur Python',
            'Consultant SAP',
            'Architecte Solutions',
            'Business Analyst',
            'Responsable RH'
        ];

        $locations = [
            'Paris', 'Lyon', 'Marseille', 'Toulouse', 'Nantes',
            'Bordeaux', 'Lille', 'Remote', 'Montpellier', 'Rennes', 'Strasbourg'
        ];

        $categories = [
            'Informatique', 'Commercial', 'Marketing', 'RH',
            'Finance', 'Design', 'Autre'
        ];

        $contractTypes = ['CDI', 'CDD', 'Stage', 'Freelance'];
        $workTypes = ['Temps plein', 'Temps partiel', 'Remote'];

        $descriptions = [
            "Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d'évolution.",
            "Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.",
            "Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.",
            "Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.",
            "Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d'évolution rapide vous attendent."
        ];

        $requirements = [
            "Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant",
            "Formation supérieure\nExpérience en gestion de projet\nMaîtrise des outils collaboratifs\nCapacités de communication\nAutonomie et rigueur",
            "Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe",
            "Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge",
            "Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d'analyse\nVeille technologique"
        ];

        $benefits = [
            "Tickets restaurant\nMutuelle d'entreprise\n13ème mois\nPrimes d'objectifs\nFormation continue",
            "Télétravail 2j/semaine\nHoraires flexibles\nComité d'entreprise\nPrime transport\nCorbeille de fruits",
            "Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie",
            "RTT supplémentaires\nPrime d'intéressement\nCrèche d'entreprise\nTickets cinéma\nÉvénements équipe",
            "Véhicule de fonction\nTéléphone pro\nPlan d'épargne entreprise\nAssurance vie\nRestauration sur site"
        ];

        return [
            'title' => $this->faker->randomElement($titles),
            'location' => $this->faker->randomElement($locations),
            'category' => $this->faker->randomElement($categories),
            'contract_type' => $this->faker->randomElement($contractTypes),
            'work_type' => $this->faker->randomElement($workTypes),
            'salary' => $this->faker->optional(0.7)->numberBetween(2500, 8000),
            'is_salary_negotiable' => $this->faker->boolean(30),
            'description' => $this->faker->randomElement($descriptions),
            'requirements' => $this->faker->randomElement($requirements),
            'benefits' => $this->faker->randomElement($benefits),
            'is_active' => $this->faker->boolean(85),
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ];
    }
}