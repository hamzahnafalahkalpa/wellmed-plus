<?php

use Illuminate\Support\Facades\Route;
use Projects\Klinik\Controllers\API\PatientEmr\Patient\PatientController;
use Projects\Klinik\Controllers\API\PatientEmr\Patient\VisitPatient\{
    VisitRegistration\VisitExamination\Assessment\AssessmentController,
    VisitRegistration\Referral\ReferralController,
    VisitRegistration\VisitExamination\Examination\ExaminationController,
    VisitRegistration\VisitExamination\VisitExaminationController,
    VisitRegistration\VisitRegistrationController,
    VisitPatientController
};
use Projects\Klinik\Controllers\API\PatientEmr\Patient\VisitRegistration\{
    VisitExamination\Assessment\AssessmentController as VRAssessmentController,
    VisitExamination\Examination\ExaminationController as VRExaminationController,
    VisitExamination\VisitExaminationController as VRVisitExaminationController,
    Referral\ReferralController as VRReferralController,
    VisitRegistrationController as VRVisitRegistrationController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/patient',PatientController::class)->parameters(['patient' => 'id']);
Route::group([
    "prefix" => "/patient/{patient_id}",
    "as"     => "patient.show.",
],function() {
    Route::apiResource('/visit-patient',VisitPatientController::class)->parameters(['visit-patient' => 'id']);
    Route::group([
        "prefix" => "/visit-patient/{visit_patient_id}",
        "as"     => "visit-patient.show.",
    ],function() {
        Route::apiResource('/visit-registration',VisitRegistrationController::class)->parameters(['visit-registration' => 'id']);
        Route::group([
            "prefix" => "/visit-registration/{visit_registration_id}",
            "as"     => "visit-registration.show.",
        ],function() {
            Route::apiResource('/referral',ReferralController::class)->parameters(['referral' => 'id']);
            Route::apiResource('/visit-examination',VisitExaminationController::class)->parameters(['visit-examination' => 'id']);
            Route::group([
                "prefix" => "/visit-examination/{visit_examination_id}",
                "as"     => "visit-examination.show.",
            ],function() {
                Route::post('/examination',[ExaminationController::class,'store'])->name('examination.store');
                Route::apiResource('/{morph}/assessment',AssessmentController::class)->parameters(['assessment' => 'id'])->only(['store','show','index']);
            });
        });
    });

    Route::apiResource('/visit-registration',VRVisitRegistrationController::class)->parameters(['visit-registration' => 'id']);
    Route::group([
        "prefix" => "/visit-registration/{visit_registration_id}",
        "as"     => "visit-registration.show.",
    ],function() {
        Route::apiResource('/referral',VRReferralController::class)->parameters(['referral' => 'id']);
        Route::apiResource('/visit-examination',VRVisitExaminationController::class)->parameters(['visit-examination' => 'id']);
        Route::group([
            "prefix" => "/visit-examination/{visit_examination_id}",
            "as"     => "visit-examination.show.",
        ],function() {
            Route::post('/examination',[VRExaminationController::class,'store'])->name('examination.store');
            Route::apiResource('/{morph}/assessment',VRAssessmentController::class)->parameters(['assessment' => 'id'])->only(['store','show','index']);
        });
    });
});
