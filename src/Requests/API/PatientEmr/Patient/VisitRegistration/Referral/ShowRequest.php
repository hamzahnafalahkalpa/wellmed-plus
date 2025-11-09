<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitRegistration\Referral;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration\Referral\EnvironmentRequest;

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
