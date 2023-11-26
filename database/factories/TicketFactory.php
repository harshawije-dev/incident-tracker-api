<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use TicketStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = \App\Models\Ticket::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticketNo' => fake()->ean13(),
            'itemCode' => fake()->asciify('*******'),
            'locationCode' => fake()->lexify('???'),
            'incidentStatus' => fake()->randomElement(config('enum.ticket_status')),
            'title' => fake()->sentence(3),
            'excerpt' => fake()->sentence(50, false),
            'description' => fake()->paragraph(),
            'user_id' => fake()->uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
