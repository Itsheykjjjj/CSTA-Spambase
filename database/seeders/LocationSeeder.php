<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $departments = [
            'CSTAADMIN' => 'CSTA Administration',
            'SIT' => 'School of Information Technology',
            'SED' => 'School of Education',
            'STM' => 'School of Tourism Management',
            'SHM' => 'School of Hospitality Management',
        ];

        foreach ($departments as $deptCode => $deptName) {
            Department::create([
                'dept_code' => $deptCode,
                'name' => $deptName
            ]);
        }

        $designations = [
            'Stock Room' => '1',
            'GYM Technical Room' => '2',
            'GYM IT Laboratory 1' => '2',
            'GYM IT Laboratory 2' => '2',
            'GYM IT Laboratory 3' => '2',
            'GYM IT Laboratory 4' => '2',
            'GYM IT Laboratory 5' => '2',
            'GYM IT Hallway' => '2',
            'GYM Technical Laboratory' => '2',
            'GYM IT Networking Lab' => '2'
        ];

        foreach ($designations as $desigName => $deptId) {
            Designation::create([
                'name' => $desigName,
                'dept_id' => $deptId
            ]);
        }
    }
}
