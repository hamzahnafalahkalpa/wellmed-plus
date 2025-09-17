<?php

namespace Projects\Klinik\Controllers\API\Navigation\Auth;

use Hanafalah\ModuleUser\Contracts\Schemas\User;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Navigation\Auth\StoreRequest;

class UpdatePasswordController extends ApiController{
    public function __construct(
        protected User $__user_schema
    ){}

    public function store(StoreRequest $request){
        $this->userAttempt();
        request()->merge([
            'id' => $this->global_user->getKey()
        ]);
        return $this->__user_schema->changePassword();
    }
}