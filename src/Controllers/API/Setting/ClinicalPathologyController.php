<?php

namespace Projects\Klinik\Controllers\API\Setting;

use Hanafalah\ModuleLabRadiology\Contracts\Schemas\ClinicalPathology;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Setting\ClinicalPathology\{
    ViewRequest, StoreRequest, DeleteRequest, ShowRequest
};

class ClinicalPathologyController extends ApiController{
    public function __construct(
        protected ClinicalPathology $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewClinicalPathologyList();
    }

    public function show(ShowRequest $request){
        return $this->__schema->showClinicalPathology();
    }

    public function store(StoreRequest $request){
        $treatment = request()->treatment;
        foreach ($treatment['service_prices'] as &$service_price) {
            $service_price['service_item_type'] ??= 'TariffComponent';
        }

        request()->merge([
            'treatment' => $treatment
        ]);
        return $this->__schema->storeClinicalPathology();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteClinicalPathology();
    }
}