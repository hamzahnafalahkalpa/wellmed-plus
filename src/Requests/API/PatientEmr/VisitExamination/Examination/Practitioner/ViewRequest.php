<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\Examination\Practitioner;

class ViewRequest extends Environment
{
  public function authorize(){
    return true;
  }

  public function rules(){
    return [];
  }
}