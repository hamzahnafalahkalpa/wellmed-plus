<?php

namespace Projects\WellmedPlus\Controllers\API\PharmacyDepartment\Dispense\VisitExamination\Examination;

use Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense\VisitExamination\Examination\{
    StoreRequest, UpdateRequest
};
use Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\Examination\EnvironmentController;

class ExaminationController extends EnvironmentController
{
    public function store(StoreRequest $request){
        return $this->storeExamination();
    }
}
