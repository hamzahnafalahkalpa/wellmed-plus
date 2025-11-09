<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\PharmacySale;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitPatient\EnvironmentRequest;

class ShowRequest extends EnvironmentRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
