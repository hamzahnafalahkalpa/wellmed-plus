<?php

namespace Projects\WellmedPlus\Requests\API\Transaction\Invoice;

use Projects\WellmedPlus\Requests\API\Transaction\Invoice\Environment;

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