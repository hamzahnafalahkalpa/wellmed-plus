<?php

namespace Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense\VisitExamination\Assessment;

use Hanafalah\LaravelSupport\Requests\FormRequest;

use Projects\WellmedPlus\Requests\API\PharmacyDepartment\VisitExamination\EnvironmentRequest;

class Environment extends FormRequest
{
  public function authorize(){
    return true;
  }
  
  public function rules(){    
    return [];
  }
}
