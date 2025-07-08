<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactMessageFactory extends Factory
{
    public function definition(): array
    {
        $statuses = ['nouveau', 'lu', 'traité', 'fermé'];

        return [
            'first_name'   => $this->faker->firstName,
            'last_name'    => $this->faker->lastName,
            'email'        => $this->faker->safeEmail,
            'subject'      => $this->faker->sentence(5),
            'message'      => $this->faker->paragraph(3),
            'status'       => $this->faker->randomElement($statuses),
            'admin_notes'  => $this->faker->boolean(30) ? $this->faker->sentence(8) : null,
            'read_at'      => function (array $attrs) {
                // Si le statut est "lu", "traité" ou "fermé", on met une date, sinon null
                return in_array($attrs['status'], ['lu', 'traité', 'fermé']) ? now()->subDays(rand(0, 30)) : null;
            },
        ];
    }
}