<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\PharmacySale\VisitExamination\Examination;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\EnvironmentRequest as Environment;

class StoreRequest extends Environment
{
  public function authorize(){
    return true;
  }
  
  public function rules(){    
    return [];
  }
}
