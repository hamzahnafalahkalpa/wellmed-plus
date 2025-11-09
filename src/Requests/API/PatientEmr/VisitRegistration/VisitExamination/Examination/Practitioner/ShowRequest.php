<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration\VisitExamination\Examination\Practitioner;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\Examination\Practitioner\Environment;

class ShowRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return [];
  }
}