<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitPatient\VisitRegistration\VisitExamination;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\EnvironmentRequest;

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
