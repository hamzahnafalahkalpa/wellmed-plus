<?php

namespace Projects\Klinik\Requests\API\ProgramActivity\Program\ActivityList\Surveillance;

use Hanafalah\LaravelSupport\Requests\FormRequest;

class ViewRequest extends FormRequest
{
    protected $__entity = 'Surveillance';

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
        return [];
    }
}
