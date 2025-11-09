<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitRegistration;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration\EnvironmentRequest;

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
