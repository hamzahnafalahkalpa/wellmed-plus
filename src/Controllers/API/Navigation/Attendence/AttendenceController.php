<?php

namespace Projects\WellmedPlus\Controllers\API\Navigation\Attendence;

use Hanafalah\ModuleEmployee\Contracts\Schemas\Attendence;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Navigation\Attendence\{
    ViewRequest, StoreRequest
};

class AttendenceController extends ApiController{
    public function __construct(
        protected Attendence $__attendence
    ){
        parent::__construct();
    }

    private function localRequest(){
        $this->userAttempt();
        request()->merge([
            'employee_id'   => $this->global_employee->getKey()
        ]);
    }

    public function store(StoreRequest $request){
        $this->localRequest();
        return $this->__attendence->storeAttendence();
    }
}