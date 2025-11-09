<?php

namespace Projects\WellmedPlus\Requests\API\Transaction\Refund;

use Projects\WellmedPlus\Requests\API\Transaction\Refund\Environment;

class DeleteRequest extends Environment
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