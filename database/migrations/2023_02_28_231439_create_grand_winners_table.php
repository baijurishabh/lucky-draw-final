<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grand_winners', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('pool_id');
            $table->string('pool_product_id');
            $table->string('user_id');
            $table->string('enquiry_id');
            $table->string("slug", 150);
            $table->enum('redeemed',['YES','NO'])->default('NO');
            $table->string("countdown");
            $table->enum('status',['ACTIVE','DISABLE'])->default('ACTIVE');
            $table->string('description')->nullable();
            $table->string('uuid')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grand_winners');
    }
};
