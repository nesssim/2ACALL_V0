<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        // Générer 30 messages de contact aléatoires
        ContactMessage::factory(30)->create();

        // Message de contact d'exemple
        ContactMessage::create([
            'first_name'   => 'Nassim',
            'last_name'    => 'Benali',
            'email'        => 'nassim@example.com',
            'subject'      => 'Demande de partenariat',
            'message'      => 'Bonjour, je souhaiterais discuter d\'un partenariat entre votre société et la nôtre. Merci de me recontacter rapidement.',
            'status'       => 'nouveau',
            'admin_notes'  => null,
            'read_at'      => null,
        ]);
    }
}