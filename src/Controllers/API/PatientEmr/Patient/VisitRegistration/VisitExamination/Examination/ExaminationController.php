<?php

namespace Projects\WellmedPlus\Controllers\API\PatientEmr\Patient\VisitRegistration\VisitExamination\Examination;

use Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitPatient\VisitRegistration\VisitExamination\Examination\{
    StoreRequest, UpdateRequest
};
use Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\Examination\EnvironmentController;

class ExaminationController extends EnvironmentController
{
    public function store(StoreRequest $request){
        return $this->storeExamination();
    }
}
