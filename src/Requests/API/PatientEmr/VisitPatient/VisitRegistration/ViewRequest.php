<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitPatient\VisitRegistration;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration\EnvironmentRequest;

class ViewRequest extends EnvironmentRequest
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
