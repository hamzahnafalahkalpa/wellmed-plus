<?php

namespace Projects\WellmedPlus\Requests\API\ItemManagement\Inventory\HealthcareEquipment;

use Hanafalah\LaravelSupport\Requests\FormRequest;

class DeleteRequest extends FormRequest
{
  protected $__entity = 'OfficeSupply';
  
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [];
  }
}