<?php

namespace Projects\Klinik\Requests\API\Setting\Examination\AllergyStuff;

use Hanafalah\LaravelSupport\Requests\FormRequest;

class DeleteRequest extends FormRequest
{
    protected $__entity = 'AllergyStuff';

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id'   => ['required',$this->idValidation($this->__entity)],
        ];
    }
}
