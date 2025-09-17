<?php

namespace Projects\Klinik\Controllers\API\PharmacyDepartment\Frontline\Examination;

use Projects\Klinik\Requests\API\PharmacyDepartment\Frontline\Examination\{
    StoreRequest, UpdateRequest
};
use Projects\Klinik\Controllers\API\PatientEmr\VisitExamination\Examination\EnvironmentController;

class ExaminationController extends EnvironmentController
{
    public function store(StoreRequest $request){
        return $this->storeExamination();
    }

    public function update(UpdateRequest $request){
        if (!isset(request()->visit_examination_id)) throw new \Exception('visit_examination_id is required');
        $visit_examination = $this->VisitExaminationModel()->with(['pharmacySale','visitRegistration.visitPatient'])->findOrFail(request()->visit_examination_id);
        // if (!isset($visit_examination->pharmacySale)) {    
            request()->merge([
                'reference_type' => 'VisitExamination',
                'visit_examiantion_model' => $visit_examination,
            ]);        
            return $this->__pharmacy_sale_schema->storePharmacySale();
        // }
        // return [];
    }
}
