<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense;

use Projects\WellmedPlus\Requests\API\VisitRegistration\EnvironmentRequest;

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
