<?php

namespace Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\Examination;

use Projects\WellmedPlus\Requests\API\PatientEmr\VisitExamination\Examination\{
    StoreRequest
};
use Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\Examination\EnvironmentController;

class ExaminationController extends EnvironmentController
{
    public function store(StoreRequest $request){
        return $this->storeExamination();
    }
}
