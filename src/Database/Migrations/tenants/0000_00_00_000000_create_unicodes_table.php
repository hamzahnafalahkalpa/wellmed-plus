<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Hanafalah\MicroTenant\Concerns\Tenant\NowYouSeeMe;
use Hanafalah\LaravelSupport\Models\Unicode\Unicode;

return new class extends Migration
{
    use NowYouSeeMe;

    private $__table;

    public function __construct()
    {
        $this->__table = app(config('database.models.Unicode', Unicode::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->isNotTableExists(function(){
            $table_name = $this->__table->getTable();
            Schema::create($table_name, function (Blueprint $table) {
                $table->ulid('id')->primary();
                $table->string('flag',100)->nullable(false);
                $table->string('label',100)->nullable();
                $table->string('name', 100)->nullable(false);
                $table->string('status', 100)->nullable();
                $table->string('reference_type', 50)->nullable(true);
                $table->string('reference_id', 36)->nullable(true);
                $table->unsignedInteger('ordering')->nullable();
                $table->json('props')->nullable();
                $table->timestamps();
                $table->softDeletes();

                $table->index(["flag"], "unicode_flag");
                $table->index(['flag','label'], "ucd_lbl_flag");
            });

            Schema::table($table_name, function (Blueprint $table) {
                $table->foreignIdFor($this->__table, 'parent_id')
                    ->nullable()->after($this->__table->getKeyName())
                    ->index()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists($this->__table->getTable());
    }
};
