<?php

use Illuminate\Support\Facades\Route;
use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModulePatient\Contracts\Data\PatientData;

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
Route::group([
    "prefix" => "/patient-emr",
    "as"     => "patient-emr.",
],function() {
    include_once(__DIR__."/patient-emr/patient.php");
    include_once(__DIR__."/patient-emr/visit-patient.php");
    include_once(__DIR__."/patient-emr/visit-registration.php");
    include_once(__DIR__."/patient-emr/visit-examination.php");
    include_once(__DIR__."/patient-emr/nurse-station.php");
    include_once(__DIR__."/patient-emr/emergency-unit.php");
    include_once(__DIR__."/patient-emr/verlos-kamer.php");
    include_once(__DIR__."/patient-emr/visit-pustu.php");
    include_once(__DIR__."/patient-emr/visit-posyandu.php");
    include_once(__DIR__."/patient-emr/medical-checkup.php");
    include_once(__DIR__."/patient-emr/referral.php");
    include_once(__DIR__."/patient-emr/inpatient.php");
});