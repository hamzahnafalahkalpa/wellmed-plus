<?php

namespace Projects\WellmedPlus\Requests\API\Transaction\Billing;

use Projects\WellmedPlus\Requests\API\Transaction\Billing\Environment;

class ViewRequest extends Environment
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
    ];
  }
}