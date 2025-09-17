<?php

namespace Projects\Klinik\Models\ModuleService;

use Hanafalah\ModuleService\Models\Service as ModelsService;

class Service extends ModelsService
{
    protected $casts = [
        'name' => 'string',
        'reference_type' => 'string',
        'medic_service_label' => 'string'
    ];

    public function getPropsQuery(): array
    {
        return [
            'medic_service_label' => 'props->prop_reference->label'
        ];
    }
}
