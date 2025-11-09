<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitRegistration\VisitExamination\Assessment;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\EnvironmentRequest;

class ViewRequest extends Environment
{
  public function authorize(){
    return true;
  }
  
  public function rules(){    
    return [];
  }
}
