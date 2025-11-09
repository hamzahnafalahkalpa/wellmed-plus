<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient;

class UpdateRequest extends PatientEnvironment
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