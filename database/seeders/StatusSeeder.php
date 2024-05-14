<?php

namespace Database\Seeders;

use App\Models\Condition;
use App\Models\Priority;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $conditions = [
            'Excellent',
            'Good',
            'Fair',
            'Poor',
            'Inoperable'
        ];

        foreach ($conditions as $condition) {
            Condition::create([
                'name' => $condition
            ]);
        }

        $statuses = [
            'In Stock',
            'Available',
            'In Use',
            'Reserved',
            'Needs Maintenance',
            'Damaged',
            'Missing',
            'End of Life'
        ];

        foreach ($statuses as $status) {
            Status::create([
                'name' => $status
            ]);
        }

        $priorities = [
            'Urgent',
            'High',
            'Medium',
            'Low'
        ];

        foreach ($priorities as $priority) {
            Priority::create([
                'name' => $priority
            ]);
        }
    }
}
