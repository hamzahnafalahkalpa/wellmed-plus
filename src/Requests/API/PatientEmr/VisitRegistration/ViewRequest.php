<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration;

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
