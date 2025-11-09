<?php

namespace Projects\WellmedPlus\Requests\API\Transaction\PointOfSale\Billing;

use Projects\WellmedPlus\Requests\API\Transaction\Billing\Environment;

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