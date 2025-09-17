<?php

namespace Projects\Klinik\Requests\API\PatientEmr\VisitExamination\Examination\Practitioner;

class StoreRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return [
      'id'                  => ['nullable'],
      'practitioner_id'     => ['required',$this->idValidation(app(config('module-patient.practitioner')))], 
      'as_delegation'       => ['nullable','boolean']
    ];
  }
}