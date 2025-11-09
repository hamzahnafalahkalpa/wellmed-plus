<?php

namespace Projects\WellmedPlus\Requests\API\Transaction\PointOfSale;

use Projects\WellmedPlus\Requests\API\Transaction\Environment;

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