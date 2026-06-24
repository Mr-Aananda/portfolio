<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Contact::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'subject' => 'Website Redesign Inquiry',
            'message' => "Hi Mahmudur,\n\nI saw your portfolio and was really impressed by your projects (especially EasySale ERP). We are looking to redesign our corporate website and build a custom CRM system. Are you available for freelance projects?\n\nBest regards,\nJohn",
            'is_read' => false,
            'created_at' => now()->subHours(2),
        ]);

        \App\Models\Contact::create([
            'name' => 'Sarah Connor',
            'email' => 'sarah@skynet.com',
            'subject' => 'Job Offer: Senior Laravel Developer',
            'message' => "Hello Mahmudur Rahman Ananda,\n\nWe are looking for a full-time Senior Laravel & Vue.js developer to join our team. Your experience with ERP systems fits perfectly with what we need. Please let me know if you are open to discuss this opportunity.\n\nThanks,\nSarah",
            'is_read' => true,
            'created_at' => now()->subDays(1),
        ]);
    }
}
