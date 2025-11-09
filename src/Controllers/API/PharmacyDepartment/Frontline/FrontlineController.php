<?php

namespace Projects\WellmedPlus\Controllers\API\PharmacyDepartment\Frontline;

use Projects\WellmedPlus\Requests\API\PharmacyDepartment\Frontline\{
    ViewRequest, ShowRequest
};
use Projects\WellmedPlus\Controllers\API\PatientEmr\VisitExamination\EnvironmentController;

class FrontlineController extends EnvironmentController
{
    public function commonConditional($query){
        $query->whereHas('visitPatient',function($query){
                $query->flagIn('VisitPatient');
              });
            //   ->where('props->is_has_prescription', true);
    }

    public function index(ViewRequest $request){
        return $this->getVisitExaminationPaginate();
    }

    public function show(ShowRequest $request){
        return $this->showVisitExamination();
    }
}
