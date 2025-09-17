<?php

namespace Projects\Klinik\Controllers\API\PatientEmr\VisitPosyandu\VisitExamination;

use Projects\Klinik\Requests\API\PatientEmr\Patient\VisitPatient\VisitRegistration\VisitExamination\{
    ViewRequest, ShowRequest
};
use Projects\Klinik\Controllers\API\PatientEmr\VisitExamination\EnvironmentController;

class VisitExaminationController extends EnvironmentController
{
    public function index(ViewRequest $request){
        return $this->__visit_examination_schema->viewVisitExaminationPaginate();
    }

    public function show(ShowRequest $request){
        return $this->__visit_examination_schema->showVisitExamination();
    }

    // public function done(CompateRequest $request) {
    //     return $this->transaction(function () {
    //         $data = $this->__visit_examination_schema->visitExaminationDoneProcess();
    //         $assessments = $this->AssessmentModel()->whereIn('morph', ['Anthropometry', 'PrimaryDiagnose', 'SecondaryDiagnose'])->where('visit_examination_id', $data->id)->get();
    //         // dispatch(new SendSatuSehatJob($data, $assessments, "MCU"));
    //         return $data;
    //     });
    // }

    // public function cancel(CompateRequest $request) {
    //     if(!isset(request()->password_cancel)) throw new \Exception("perlu masukan password");
    //     if(Hash::check(request()->password_cancel,$this->global_workspace->password_cancel)) {
    //         $visit_patient = $this->__visit_examination_schema->visitExaminationCancelation();
    //         $transaction = $this->TransactionModel()->with(['transactionItems'])->where('reference_type', 'VisitPatient')->where('reference_id', $visit_patient->id)->first();
    //         // dispatch(new RequestLabToLISJob($visit_patient, 'cancel', $transaction));
    //         return true;
    //     }else throw new \Exception("password salah!");
    // }
}
