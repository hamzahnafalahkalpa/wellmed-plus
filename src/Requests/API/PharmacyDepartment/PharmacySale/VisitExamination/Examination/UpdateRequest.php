<?php

namespace Projects\Klinik\Requests\API\PharmacyDepartment\PharmacySale\VisitExamination\Examination;

use Projects\Klinik\Requests\API\PatientEmr\VisitExamination\EnvironmentRequest as Environment;

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