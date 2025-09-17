<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModulePayer\Contracts\Schemas\Company;
use Projects\Klinik\Requests\API\Setting\Organization\{
    ViewRequest, StoreRequest, DeleteRequest
};
use Projects\Klinik\Controllers\API\ApiController;

class CompanyController extends ApiController {
    public function __construct(
        protected Company $__schema
    ){}

    public function index(ViewRequest $request) {
        return $this->__schema->viewCompanyList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeCompany();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteCompany();
    }
}