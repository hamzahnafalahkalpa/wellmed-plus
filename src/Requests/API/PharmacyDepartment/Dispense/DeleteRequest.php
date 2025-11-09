<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense;

use Projects\WellmedPlus\Requests\API\VisitRegistration\EnvironmentRequest;

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
