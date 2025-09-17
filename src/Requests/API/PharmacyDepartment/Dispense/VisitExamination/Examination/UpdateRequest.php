<?php

namespace Projects\Klinik\Requests\API\PharmacyDepartment\Dispense\VisitExamination\Examination;

use Projects\Klinik\Requests\API\VisitRegistration\VisitExamination\Examination\Practitioner\Environment;

class UpdateRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return $this->setRules([
        'visit_examination_id' => ['required'],
        'type'                 => ['required','in:commit, closed-emr-session'],
    ]);
  }
}