<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;


class TicketSeeDer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::insert([
            'title' => 'Analysis',
            'lane_id' => 1,
            'author' => 'John Doe',
            'position' => 0,
            'priority' => 'low',
            'created_at' => now(),
            'comments_count' => 0,
            'description' => 'Description of the first ticket',
            'link_issue' => 'https://example.com/issue1',
        ]);
        Ticket::insert([
            'title' => 'Update database schema',
            'lane_id' => 2,
            'author' => 'John Doe',
            'position' => 0,
            'priority' => 'Medium',
            'created_at' => now(),
            'comments_count' => 0,
            'description' => 'Description of the second ticket',
            'link_issue' => 'https://example.com/issue2',
        ]);
        Ticket::insert([
            'title' => 'Add new feature',
            'lane_id' => 3,
            'author' => 'Michael Jackson',
            'position' => 0,
            'priority' => 'High',
            'created_at' => now(),
            'comments_count' => 0,
            'description' => 'Description of the third ticket',
            'link_issue' => 'https://example.com/issue3',
        ]);
        Ticket::insert([
            'title' => 'Handle error code response',
            'lane_id' => 1,
            'author' => 'John Doe',
            'position' => 1,
            'priority' => 'low',
            'created_at' => now(),
            'comments_count' => 0,
            'description' => 'Description of the Handle error ticket',
            'link_issue' => 'https://example.com/issue1',
        ]);
    }
}
