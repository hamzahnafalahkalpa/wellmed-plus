<?php

namespace Projects\Klinik\Requests\API\PatientEmr\VisitExamination\Examination\Practitioner;

class DeleteRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return [
      'id' => ['nullable']
    ];
  }
}