<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $studentData = [
            [
                'user_id' => 3, // student user
                'full_name' => 'Alice Williams',
                'address' => '123 Main St',
                'city' => 'City',
                'state' => 'State',
                'zip_code' => '12345',
                'country' => 'USA',
                'age' => 20,
                'phone_number' => '555-0101',
                'major' => 'Computer Science',
                'gpa' => 3.75,
                'department_id' => 1,
                'status' => 'active',
                'enrollment_date' => '2023-09-01',
                'expected_graduation_date' => '2027-05-15',
            ],
        ];

        $addresses = [
            '456 Oak Ave, Springfield, IL',
            '789 Pine Rd, Portland, OR',
            '321 Elm St, Austin, TX',
            '654 Maple Dr, Denver, CO',
            '987 Cedar Ln, Seattle, WA',
            '147 Birch Ct, Miami, FL',
            '258 Willow Way, Boston, MA',
            '369 Ash Blvd, Phoenix, AZ',
            '741 Poplar St, Atlanta, GA',
            '852 Spruce Ave, San Diego, CA',
        ];

        $majors = ['Computer Science', 'Mathematics', 'Physics', 'Chemistry', 'Biology'];
        $statuses = ['active', 'active', 'active', 'inactive', 'graduated'];

        // Create additional student records for existing users
        $additionalStudentData = [
            ['user_id' => 4, 'full_name' => 'Bob Bob', 'address' => '456 Oak Ave', 'city' => 'Springfield', 'state' => 'IL', 'zip_code' => '12345', 'country' => 'USA', 'age' => 19, 'phone_number' => '555-0102', 'major' => 'Mathematics', 'gpa' => 3.85, 'department_id' => 2, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 5, 'full_name' => 'Carol Carol', 'address' => '789 Pine Rd', 'city' => 'Portland', 'state' => 'OR', 'zip_code' => '23456', 'country' => 'USA', 'age' => 21, 'phone_number' => '555-0103', 'major' => 'Physics', 'gpa' => 3.92, 'department_id' => 3, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 6, 'full_name' => 'Daniel Daniel', 'address' => '321 Elm St', 'city' => 'Austin', 'state' => 'TX', 'zip_code' => '34567', 'country' => 'USA', 'age' => 20, 'phone_number' => '555-0104', 'major' => 'Chemistry', 'gpa' => 3.78, 'department_id' => 4, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 7, 'full_name' => 'Emma Emma', 'address' => '654 Maple Dr', 'city' => 'Denver', 'state' => 'CO', 'zip_code' => '45678', 'country' => 'USA', 'age' => 22, 'phone_number' => '555-0105', 'major' => 'Biology', 'gpa' => 3.65, 'department_id' => 5, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 8, 'full_name' => 'Frank Frank', 'address' => '987 Cedar Ln', 'city' => 'Seattle', 'state' => 'WA', 'zip_code' => '56789', 'country' => 'USA', 'age' => 23, 'phone_number' => '555-0106', 'major' => 'Computer Science', 'gpa' => 3.45, 'department_id' => 1, 'status' => 'inactive', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 9, 'full_name' => 'Grace Grace', 'address' => '147 Birch Ct', 'city' => 'Miami', 'state' => 'FL', 'zip_code' => '67890', 'country' => 'USA', 'age' => 24, 'phone_number' => '555-0107', 'major' => 'Mathematics', 'gpa' => 3.88, 'department_id' => 2, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 10, 'full_name' => 'Henry Henry', 'address' => '258 Willow Way', 'city' => 'Boston', 'state' => 'MA', 'zip_code' => '78901', 'country' => 'USA', 'age' => 25, 'phone_number' => '555-0108', 'major' => 'Physics', 'gpa' => 3.76, 'department_id' => 3, 'status' => 'graduated', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 11, 'full_name' => 'Iris Iris', 'address' => '369 Ash Blvd', 'city' => 'Phoenix', 'state' => 'AZ', 'zip_code' => '89012', 'country' => 'USA', 'age' => 18, 'phone_number' => '555-0109', 'major' => 'Chemistry', 'gpa' => 3.91, 'department_id' => 4, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 12, 'full_name' => 'Jack Jack', 'address' => '741 Poplar St', 'city' => 'Atlanta', 'state' => 'GA', 'zip_code' => '90123', 'country' => 'USA', 'age' => 19, 'phone_number' => '555-0110', 'major' => 'Biology', 'gpa' => 3.67, 'department_id' => 5, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
            ['user_id' => 13, 'full_name' => 'Kelly Kelly', 'address' => '852 Spruce Ave', 'city' => 'San Diego', 'state' => 'CA', 'zip_code' => '01234', 'country' => 'USA', 'age' => 20, 'phone_number' => '555-0111', 'major' => 'Computer Science', 'gpa' => 3.82, 'department_id' => 1, 'status' => 'active', 'enrollment_date' => '2023-09-01', 'expected_graduation_date' => '2027-05-15'],
        ];

        foreach ($additionalStudentData as $student) {
            $studentData[] = $student;
        }

        foreach ($studentData as $student) {
            \App\Student::create($student);
        }
    }
}
