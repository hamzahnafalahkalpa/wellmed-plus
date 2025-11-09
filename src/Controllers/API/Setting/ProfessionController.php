<?php

namespace Projects\WellmedPlus\Controllers\API\Setting;

use Hanafalah\ModuleProfession\Contracts\Schemas\Profession;
use Projects\WellmedPlus\Controllers\API\ApiController;
use Projects\WellmedPlus\Requests\API\Setting\Profession\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ProfessionController extends ApiController{
    public function __construct(
        protected Profession $__schema    
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewProfessionList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeProfession();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteProfession();
    }
}