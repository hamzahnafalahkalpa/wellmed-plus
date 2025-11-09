<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitPatient\VisitRegistration;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitPatient\EnvironmentRequest;

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