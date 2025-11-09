<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Frontline\Examination;

use Projects\WellmedPlus\Requests\API\VisitRegistration\VisitExamination\Examination\Practitioner\Environment;

class UpdateRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return $this->setRules([
        'visit_examination_id' => ['required'],
        'type'                 => ['required','in:commit,dispense'],
    ]);
  }
}