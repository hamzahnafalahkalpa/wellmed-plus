<?php

namespace Projects\WellmedPlus\Controllers\API\PharmacyDepartment\Dispense\VisitExamination;

use Projects\WellmedPlus\Requests\API\PharmacyDepartment\Dispense\VisitExamination\{
    ViewRequest, ShowRequest
};
use Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\EnvironmentController;

class VisitExaminationController extends EnvironmentController
{
    public function index(ViewRequest $request){
        return $this->getVisitExaminationPaginate();
    }

    public function show(ShowRequest $request){
        return $this->showVisitExamination();
    }
}
