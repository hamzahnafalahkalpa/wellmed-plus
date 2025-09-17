<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Hanafalah\ModulePayment\Models\Payment\PaymentHistory;
use Hanafalah\ModulePayment\Models\Price\Voucher;
use Hanafalah\ModulePayment\Models\Price\VoucherTransaction;
use Hanafalah\ModuleTransaction\Models\Transaction\Transaction;

return new class extends Migration
{
    use Hanafalah\MicroTenant\Concerns\Tenant\NowYouSeeMe;

    private $__table;

    public function __construct()
    {
        $this->__table = app(config('database.models.VoucherTransaction', VoucherTransaction::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table_name = $this->__table->getTable();
        $this->isNotTableExists(function() use ($table_name){
            Schema::create($table_name, function (Blueprint $table) {
                $voucher        = app(config('database.models.Voucher', Voucher::class));
                $paymentHistory = app(config('database.models.PaymentHistory', PaymentHistory::class));
                $transaction    = app(config('database.models.Transaction', Transaction::class));

                $table->ulid('id')->primary();
                $table->string('name')->nullable(false);
                $table->foreignIdFor($voucher::class)->nullable()->index()
                    ->constrained()->cascadeOnUpdate()->nullOnDelete();
                $table->string('consument_type', 50)->nullable(null);
                $table->string('consument_id', 36)->nullable(null);
                $table->foreignIdFor($paymentHistory::class)
                    ->nullable()->index()
                    ->constrained()->cascadeOnUpdate()->nullOnDelete();
                $table->foreignIdFor($transaction::class, 'ref_transaction_id')
                    ->nullable()
                    ->cascadeOnUpdate()->nullOnDelete();
                $table->string('status', 50)->nullable();
                $table->timestamp('reported_at')->nullable();
                $table->json('props')->nullable();
                $table->timestamps();
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
