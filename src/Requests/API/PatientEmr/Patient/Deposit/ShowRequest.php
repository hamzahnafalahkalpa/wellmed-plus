<?php

namespace Projects\WellmedPlus\Requests\API\PatientEmr\Patient\Deposit;

use Projects\WellmedPlus\Requests\API\Transaction\Deposit\Environment;

class ShowRequest extends Environment
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [];
  }
}
