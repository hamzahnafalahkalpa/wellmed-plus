<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitPatient\VisitRegistration\Referral;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration\Referral\EnvironmentRequest;

class DeleteRequest extends EnvironmentRequest
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
