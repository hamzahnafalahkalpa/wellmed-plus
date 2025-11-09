<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration;

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
