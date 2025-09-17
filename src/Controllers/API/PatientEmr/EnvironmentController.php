<?php

namespace Projects\Klinik\Controllers\API\PatientEmr;

use Hanafalah\ModuleExamination\Contracts\Schemas\Examination;
use Hanafalah\ModuleExamination\Contracts\Schemas\Examination\Assessment\Assessment;
use Hanafalah\ModulePatient\Contracts\Schemas\{
    PractitionerEvaluation,
    Referral,
    VisitExamination,
    VisitPatient,
    VisitRegistration
};
use Hanafalah\ModulePharmacy\Contracts\Schemas\PharmacySale;
use Projects\Klinik\Controllers\API\ApiController as ApiBaseController;

class EnvironmentController extends ApiBaseController{

    public function __construct(
        protected VisitExamination $__visit_examination_schema,
        protected VisitPatient $__visit_patient_schema,
        protected VisitRegistration $__visit_registration_schema,
        protected Examination $__examination_schema,
        protected PractitionerEvaluation $__practitioner_evaluation_schema,
        protected Referral $__referral_schema,
        protected Assessment $__assessment_schema,
        protected PharmacySale $__pharmacy_sale_schema
    )
    {
        parent::__construct();   
        $this->userAttempt();
    }

    protected function commonConditional($query){

    }

    protected function commonRequest(){
        
    }

    protected function isEmployee(): bool{
        return isset($this->global_employee);
    }

    protected function employeeHasProfession(string $profession):bool{
        return $this->isEmployee() && isset($this->global_employee->profession) && $this->global_employee->profession['label'] == $profession;
    }

    protected function isDoctor(){
        return $this->employeeHasProfession('Doctor');
    }

    protected function isPerawat(){
        return $this->employeeHasProfession('Nurse');
    }

    protected function isMidwife(){
        return $this->employeeHasProfession('Midwife');
    }

    protected function getMedicServiceFromEmployee(){
        if (isset($this->global_employee)){
            $profession = $this->global_employee->profession;
            if (isset($profession) && $profession->label == 'Nurse'){
                $rooms = $this->global_employee->rooms;
                $medic_service_id = [];
                foreach ($rooms as $room) {
                    if (isset($room)){
                        $model_has_service = $room->modelHasService()->first();
                        if (isset($model_has_service)) $medic_service_id[] = $model_has_service->service_id;
                    }
                }
            }else{
                $room = $this->global_employee->room;
                if (isset($room)){
                    $model_has_service = $room->modelHasService()->first();
                    if (isset($model_has_service)) $medic_service_id = $model_has_service->service_id;
                }
            }
        }
        return $medic_service_id ?? null;
    }
}
