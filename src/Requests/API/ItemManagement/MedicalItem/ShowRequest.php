<?php

namespace Projects\Klinik\Requests\API\ItemManagement\MedicalItem;

use Hanafalah\LaravelSupport\Requests\FormRequest;

class ShowRequest extends FormRequest
{
  protected $__entity = 'MedicalItem';

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [];
  }
}
