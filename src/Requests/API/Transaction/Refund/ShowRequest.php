<?php

namespace Projects\WellmedPlus\Requests\API\Transaction\Refund;

use Projects\WellmedPlus\Requests\API\Transaction\Refund\Environment;

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
