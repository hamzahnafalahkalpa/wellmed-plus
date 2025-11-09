<?php

use Illuminate\Support\Facades\Route;
use Projects\WellmedPlus\Controllers\API\Setting\{
    MedicalTreatmentController,
    SampleController
};

Route::group([
    'prefix' => '/treatment',
    'as' => 'treatment.'
],function(){
    Route::apiResource('/medical-treatment',MedicalTreatmentController::class)->parameters(['medical-treatment' => 'id']);
});

