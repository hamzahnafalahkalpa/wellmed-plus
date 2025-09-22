<?php

use Hanafalah\ModulePatient\{
    Commands as ModulePatientCommands,
};

return [
    'practitioner' => 'Employee',
    'payment_detail' => 'PaymentDetail',
    'transaction' => 'PosTransaction',
    'patient_types' => [
        'student' => [
            'schema' => 'PatientPeople',
        ]
    ]
];