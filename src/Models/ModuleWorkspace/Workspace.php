<?php

namespace Projects\WellmedPlus\Models\ModuleWorkspace;

use Hanafalah\ModuleWorkspace\Models\Workspace\Workspace as WorkspaceWorkspace;
use Projects\WellmedPlus\Transformers\Workspace\SettingWorkspace;

class Workspace extends WorkspaceWorkspace
{
    public function getSettingResource(){
        return SettingWorkspace::class;
    }
}
