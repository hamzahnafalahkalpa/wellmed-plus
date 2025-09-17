<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Hanafalah\MicroTenant\Concerns\Tenant\NowYouSeeMe;
use Hanafalah\MicroTenant\Models\LogHistory\CentralLogHistory;

return new class extends Migration
{
    use NowYouSeeMe;

    private $__table;

    public function __construct()
    {
        $this->__table = app(config('database.models.CentralLoghistory', CentralLogHistory::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->isNotTableExists(function(){
            $table_name = $this->__table->getTableName();
            Schema::create($table_name, function (Blueprint $table) {
                $table->ulid('id');
                $table->string('reference_type', 50)->nullable();
                $table->string('reference_id', 36)->nullable();
                $table->longText('content')->nullable();
                $table->enum('content_type', ['JSON'])->nullable();
                $table->enum('action_type', ['insert', 'update', 'delete', 'soft_delete'])->nullable();
                $table->string('author_id', 36)->nullable();
                $table->string('author_type', 50)->nullable();
                $table->text('author_name')->nullable();
                $table->unsignedTinyInteger('status')->nullable()->default(1);
                $table->timestamps();

                $table->index(['reference_type', 'reference_id'], 'log_sumber');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->__table->getTableName());
    }
};
