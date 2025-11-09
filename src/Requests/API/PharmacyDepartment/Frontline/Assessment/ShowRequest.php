<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Frontline\Assessment;

use Projects\WellmedPlus\Requests\API\PharmacyDepartment\VisitExamination\EnvironmentRequest;

class ShowRequest extends Environment
{
  public function authorize(){
    return true;
  }
  
  public function rules(){    
    return [];
  }
}
