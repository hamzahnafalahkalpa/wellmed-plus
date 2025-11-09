<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Frontline\Examination\Practitioner;

use Projects\WellmedPlus\Requests\API\VisitRegistration\VisitExamination\Examination\Practitioner\Environment;

class ShowRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return [];
  }
}