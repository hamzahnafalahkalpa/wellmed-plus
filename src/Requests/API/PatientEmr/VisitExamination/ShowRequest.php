<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination;

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
