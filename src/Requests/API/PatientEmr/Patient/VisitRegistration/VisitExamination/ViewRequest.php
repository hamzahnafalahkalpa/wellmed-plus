<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitRegistration\VisitExamination;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\EnvironmentRequest;

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
