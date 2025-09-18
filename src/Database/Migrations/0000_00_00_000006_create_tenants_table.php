<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Hanafalah\MicroTenant\Concerns\Tenant\NowYouSeeMe;
use Hanafalah\MicroTenant\Models\Tenant\Domain;
use Hanafalah\MicroTenant\Models\Tenant\Tenant;

return new class extends Migration
{
    use NowYouSeeMe;

    private $__table;

    public function __construct()
    {
        $this->__table = app(config('database.models.Tenant', Tenant::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table_name = $this->__table->getTableName();
        $this->isNotTableExists(function() use ($table_name){
            Schema::create($table_name, function (Blueprint $table) {
                $domain = app(config('database.models.Domain', Domain::class));

                $table->ulid('id')->primary();
                $table->string('uuid', 36)->nullable(false);
                $table->string('name', 50)->nullable(false);
                $table->string('reference_type', 50)->nullable();
                $table->string('reference_id', 36)->nullable();
                $table->enum('flag', [
                    $this->__table::FLAG_APP_TENANT,
                    $this->__table::FLAG_CENTRAL_TENANT,
                    $this->__table::FLAG_TENANT,
                    $this->__table::FLAG_CLUSTER
                ])->default($this->__table::FLAG_TENANT)->nullable(false);
                $table->foreignIdFor($domain::class)->nullable()->index()
                    ->constrained()->cascadeOnUpdate()->nullOnDelete();
                $table->json('props')->nullable();
                $table->timestamps();
                $table->softDeletes();

                $table->index(['reference_id', 'reference_type'], 'tenants_reference_index');
                $table->unique(['name', 'flag'], 'tenant_unique');
            });
        });
        $this->isNotColumnExists('parent_id',function() use ($table_name){
            Schema::table($table_name, function (Blueprint $table) use ($table_name) {
                $model = $this->__table;
                $table->foreignIdFor($model::class, 'parent_id')
                    ->nullable()
                    ->after($model->getKeyName())
                    ->index()->constrained($table_name, $model->getKeyName())
                    ->restrictOnDelete()->cascadeOnUpdate();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->__table->getTable());
    }
};
