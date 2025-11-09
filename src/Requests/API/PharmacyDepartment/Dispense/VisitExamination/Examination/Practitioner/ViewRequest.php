<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense\VisitExamination\Examination\Practitioner;

use Projects\WellmedPlus\Requests\API\VisitRegistration\VisitExamination\Examination\Practitioner\Environment;

class ViewRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return [];
  }
}