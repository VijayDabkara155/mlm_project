<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('login_id');
            $table->foreign('login_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('amount',10,2);
            $table->enum('pay_method',["0","1","2","3","4"])->default("0")->comment("0=upi and 1=wallet and 2=net_banking and 3=qr and 4=card");
            $table->string('screenshot');
            $table->enum('',["0","1","2"])->default("0")->comment("0=pending and 1=accept and 2=reject");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_request');
    }
};
