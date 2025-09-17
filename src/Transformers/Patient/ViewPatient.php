<?php

namespace Projects\Klinik\Transformers\Patient;

use Hanafalah\ModulePatient\Resources\Patient\ViewPatient as PatientViewPatient;

class ViewPatient extends PatientViewPatient
{
    public function toArray(\Illuminate\Http\Request $request): array
    {
        $arr = [
            'consument' => $this->relationValidation('consument', function () {
                return $this->propExcludes($this->consument->toViewApi()->resolve(),'reference');
            })
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);
        return $arr;
    }
}
