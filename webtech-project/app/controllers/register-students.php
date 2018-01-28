<?php

session_start();

if(isset($_POST['register-student'])) {
    $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'blood_group' => $_POST['blood_group'],
        'gender' => $_POST['gender'],
        'birth_date' => $_POST['birth_date'],
        'parmanent_address' => $_POST['parmanent_address'],
        'parents_contact_number' => $_POST['parents_contact_number'],
        'students_contact_number' => $_POST['students_contact_number'],
        'local_guardians_contact_number' => $_POST['local_guardians_contact_number'],
        'department_id' => $_POST['department_id'],
        'program_id' => $_POST['program_id'],
        'cgpa' => 0.0,
        'credits_completed' => 0
    ];

    var_dump($data);
}

require '../views/register-student.view.php';
