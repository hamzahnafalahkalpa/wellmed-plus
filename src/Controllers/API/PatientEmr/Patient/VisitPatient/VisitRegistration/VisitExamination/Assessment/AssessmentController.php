<?php

namespace Projects\WellmedPlus\Controllers\API\PatientEmr\Patient\VisitPatient\VisitRegistration\VisitExamination\Assessment;

use Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\Assessment\EnvironmentController;
use Projects\WellmedPlus\Requests\API\PatientEmr\Patient\VisitPatient\VisitRegistration\VisitExamination\Assessment\{
    ViewRequest, StoreRequest, ShowRequest
};

class AssessmentController extends EnvironmentController
{
    public function index(ViewRequest $request){
        return $this->getAssessment();
    }

    public function show(ShowRequest $request){
        return $this->getAssessment();
    }

    public function store(StoreRequest $request){
        return $this->storeAssessment();
    }
}
