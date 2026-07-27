<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('loan_installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained('loans')->cascadeOnDelete();
            $table->integer('installment_number');
            $table->date('due_date');
            $table->decimal('amount_principal', 15, 2);
            $table->decimal('amount_interest', 15, 2);
            $table->decimal('amount_total', 15, 2);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->date('paid_at')->nullable();
            $table->enum('status', ['pending','partial','paid','overdue'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_installments');
    }
};
