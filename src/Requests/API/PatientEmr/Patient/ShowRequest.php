<?php

namespace Projects\Klinik\Requests\API\PatientEmr\Patient;

class ShowRequest extends PatientEnvironment
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
