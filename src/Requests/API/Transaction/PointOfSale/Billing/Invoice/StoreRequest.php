<?php

namespace Projects\Klinik\Requests\API\Transaction\PointOfSale\Billing\Invoice;

use Projects\Klinik\Requests\API\Transaction\Invoice\Environment;

class StoreRequest extends Environment
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
