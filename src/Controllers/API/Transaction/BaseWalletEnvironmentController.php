<?php

namespace Projects\Klinik\Controllers\API\Transaction;

use Hanafalah\ModulePayment\Contracts\Schemas\Deposit;
use Hanafalah\ModulePayment\Contracts\Schemas\Refund;
use Projects\Klinik\Controllers\API\ApiController;

class BaseWalletEnvironmentController extends ApiController{
    public function __construct(
        public Refund $__refund_schema,
        public Deposit $__deposit_schema,
    ){
        parent::__construct();
        $this->userAttempt();
    }

    protected function commonConditional($query){

    }

    protected function commonRequest(){
        if (isset($this->global_employee)){
            request()->merge([
                'author_type' => $this->global_employee->getMorphClass(),
                'author_id'   => $this->global_employee->getKey()
            ]);
        }
    }
}