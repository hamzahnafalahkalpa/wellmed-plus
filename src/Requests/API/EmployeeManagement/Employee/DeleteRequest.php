<?php

namespace Projects\Klinik\Requests\API\EmployeeManagement\Employee;

use Hanafalah\LaravelSupport\Requests\FormRequest;

class DeleteRequest extends FormRequest
{
    protected $__entity = 'Employee';

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
            'id'   => ['nullable','required_without:uuid',$this->idValidation($this->__entity)],
            // 'uuid' => ['nullable','required_without:id', 'string', $this->existsValidation($this->__entity,'uuid')],
        ];
    }
}
