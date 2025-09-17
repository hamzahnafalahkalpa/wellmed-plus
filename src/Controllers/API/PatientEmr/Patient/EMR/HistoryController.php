<?php

namespace Projects\Klinik\Controllers\API\PatientEmr\Patient\EMR;

use Illuminate\Http\Request;
use Projects\Klinik\Controllers\API\ApiController as ApiBaseController;
use Projects\Klinik\Resources\HistoryNaphier\ViewHistory;

class HistoryController extends ApiBaseController {
    public function index(Request $request){
        return $this->transforming(ViewHistory::class,function(){
            return $this->NaphierVisitPatientModel()->whereHas('patient',function($query){
                $query->whereHas('userReference',fn($q)=>$q->where('uuid',request()->uuid));
            })->orderBy('visited_at','desc')->paginate(request()->per_page ?? 20)
                ->appends(request()->all());
        });
    }
}
