<?php

namespace Projects\Klinik\Controllers\API\ItemManagement\OpnameStock;

use Projects\Klinik\Requests\API\ItemManagement\OpnameStock\{
    DeleteRequest, StoreRequest, ViewRequest, ShowRequest
};

class OpnameStockController extends EnvironmentController{
    public function index(ViewRequest $request) {
        return $this->getOpnameStockPaginate();
    }

    public function store(StoreRequest $request){
        return $this->storeOpnameStock();
    }

    public function show(ShowRequest $request){
        return $this->showOpnameStock();
    }

    public function destroy(DeleteRequest $request){
        return $this->deleteOpnameStock();
    }
}
