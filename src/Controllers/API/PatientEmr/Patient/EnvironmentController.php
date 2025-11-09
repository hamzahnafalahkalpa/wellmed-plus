<?php

namespace Projects\WellmedPlus\Controllers\API\PatientEmr\Patient;

use Projects\WellmedPlus\Contracts\Schemas\ModulePatient\Patient;
use Projects\WellmedPlus\Controllers\API\ApiController as ApiBaseController;

class EnvironmentController extends ApiBaseController{

    public function __construct(
        protected Patient $__schema,
    ){
        parent::__construct();
    }

    protected function recombineRequest(){
        if (isset(request()->search_value)){
            $this->__schema->setParamLogic('or');
            request()->merge([
                'search_name'           => request()->search_value,
                'search_dob'            => request()->search_value,
                'search_nik'            => request()->search_value,
                'search_crew_id'        => request()->search_value,
                'search_medical_record' => request()->search_value,
                'search_value' => null
            ]);
        }
    }
}
