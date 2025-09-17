<?php

namespace Projects\Klinik\Controllers\API\Finance\JournalEntry;

use Hanafalah\ModulePayment\Contracts\Schemas\JournalEntry;
use Projects\Klinik\Controllers\API\ApiController;
use Projects\Klinik\Requests\API\Finance\JournalEntry\{
    ViewRequest, ShowRequest, StoreRequest, DeleteRequest
};

class JournalEntryController extends ApiController{
    public function __construct(
        protected JournalEntry $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewJournalEntryPaginate();
    }

    public function show(ShowRequest $request){
        return $this->__schema->showJournalEntry();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeJournalEntry();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteJournalEntry();
    }
}