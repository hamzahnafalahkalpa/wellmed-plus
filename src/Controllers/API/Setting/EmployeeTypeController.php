<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleEmployee\Contracts\Schemas\EmployeeType;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\EmployeeType\{
    ViewRequest, StoreRequest, DeleteRequest
};

class EmployeeTypeController extends ApiController{
    public function __construct(
        protected EmployeeType $__employee_type_schema    
    ){}

    public function index(ViewRequest $request){
        return $this->__employee_type_schema->viewEmployeeTypeList();
    }

    public function store(StoreRequest $request){
        return $this->__employee_type_schema->storeEmployeeType();
    }

    public function destroy(DeleteRequest $request){
        return $this->__employee_type_schema->deleteEmployeeType();
    }
}