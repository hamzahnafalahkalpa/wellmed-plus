<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitPatient;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitPatient\EnvironmentRequest;

class UpdateRequest extends EnvironmentRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [];
  }
}