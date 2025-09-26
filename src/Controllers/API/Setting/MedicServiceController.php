<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleMedicService\Contracts\Schemas\MedicService;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\MedicService\{
    ViewRequest, StoreRequest, DeleteRequest
};

class MedicServiceController extends ApiController{
    public function __construct(
        protected MedicService $__schema
    ){
        request()->merge(['flag' => 'MedicService']);
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewMedicServiceList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeMedicService();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteMedicService();
    }
}