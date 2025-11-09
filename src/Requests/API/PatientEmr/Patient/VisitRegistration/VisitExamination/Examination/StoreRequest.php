<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitRegistration\VisitExamination\Examination;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\Examination\Environment;

class StoreRequest extends Environment
{
  public function authorize(){
    return true;
  }
  
  public function rules(){    
    return [];
  }
}
