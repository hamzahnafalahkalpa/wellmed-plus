<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense\VisitExamination\Examination;

use Projects\WellmedPlus\Requests\API\VisitRegistration\VisitExamination\Examination\Practitioner\Environment;

class StoreRequest extends Environment
{
  public function authorize(){
    return true;
  }
  
  public function rules(){    
    return [];
  }
}
