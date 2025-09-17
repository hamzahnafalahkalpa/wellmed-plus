<?php

namespace Projects\Klinik\Requests\API\PatientEmr\VisitPatient;
use Hanafalah\LaravelSupport\Requests\FormRequest;

use Projects\Klinik\Requests\API\PatientEmr\VisitPatient\EnvironmentRequest;

class StoreRequest extends EnvironmentRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
